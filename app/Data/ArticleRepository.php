<?php

namespace App\Data;

/**
 * Membaca artikel Markdown baru tanpa dependensi Markdown eksternal.
 * Parser dibatasi pada konstruksi yang dipakai sumber: heading, paragraf,
 * bullet/numbered list, blockquote, bold, italic, code inline, dan link.
 */
class ArticleRepository
{
    /** @var array<string, array<string, mixed>> */
    private static array $cache = [];

    public static function find(string $category, string $slug): ?array
    {
        $key = $category.'|'.$slug;
        if (array_key_exists($key, self::$cache)) {
            return self::$cache[$key];
        }

        $path = resource_path('articles/'.$category.'/'.$slug.'.md');
        if (!is_file($path)) {
            self::$cache[$key] = null;
            return null;
        }

        $raw = file_get_contents($path);
        if ($raw === false) {
            self::$cache[$key] = null;
            return null;
        }

        [$meta, $body] = self::parseDocument($raw);
        $meta['slug'] = $meta['slug'] ?? $slug;
        $meta['category'] = $meta['category'] ?? $category;
        $meta['title'] = $meta['title'] ?? $slug;
        $meta['keyword_turunan'] = $meta['keyword_turunan'] ?? [];
        $meta['related'] = $meta['related'] ?? [];
        $meta['industri'] = $meta['industri'] ?? [];
        $meta['faq'] = $meta['faq'] ?? [];

        self::$cache[$key] = [
            'meta' => $meta,
            'body' => $body,
            'html' => self::markdownToHtml($body),
            'path' => $path,
        ];

        return self::$cache[$key];
    }

    /** @return array{0: array<string, mixed>, 1: string} */
    private static function parseDocument(string $raw): array
    {
        $raw = str_replace(["\r\n", "\r"], "\n", $raw);
        if (!str_starts_with($raw, "---\n")) {
            return [[], $raw];
        }
        $end = strpos($raw, "\n---", 4);
        if ($end === false) {
            return [[], $raw];
        }

        $frontmatter = substr($raw, 4, $end - 4);
        $body = ltrim(substr($raw, $end + 5), "\n");
        $meta = [];
        $lines = preg_split('/\n/', $frontmatter) ?: [];
        $current = null;

        foreach ($lines as $line) {
            if (preg_match('/^\s*-\s*q:\s*(.+)$/', $line, $m) && $current === 'faq') {
                $meta['faq'][] = ['q' => self::unquote(trim($m[1])), 'a' => ''];
                continue;
            }
            if (preg_match('/^\s*a:\s*(.+)$/', $line, $m) && $current === 'faq' && !empty($meta['faq'])) {
                $last = count($meta['faq']) - 1;
                $meta['faq'][$last]['a'] = self::unquote(trim($m[1]));
                continue;
            }
            if (preg_match('/^\s*-\s*(.+)$/', $line, $m) && in_array($current, ['keyword_turunan','related','industri'], true)) {
                $meta[$current][] = self::unquote(trim($m[1]));
                continue;
            }
            if (preg_match('/^([A-Za-z_][A-Za-z0-9_]*):\s*(.*)$/', $line, $m)) {
                $current = $m[1];
                $rawValue = trim($m[2]);
                if ($current === 'faq') {
                    $meta['faq'] = [];
                    continue;
                }
                if ($rawValue === '') {
                    $meta[$current] = [];
                } elseif (str_starts_with($rawValue, '[') && str_ends_with($rawValue, ']')) {
                    $meta[$current] = array_values(array_filter(array_map(
                        fn ($v) => self::unquote(trim($v)),
                        str_getcsv(substr($rawValue, 1, -1))
                    ), fn ($v) => $v !== ''));
                } else {
                    $meta[$current] = self::unquote($rawValue);
                }
            }
        }

        return [$meta, $body];
    }

    private static function unquote(string $value): string
    {
        $value = trim($value);
        if (strlen($value) >= 2 && $value[0] === '"' && substr($value, -1) === '"') {
            return str_replace('\\"', '"', substr($value, 1, -1));
        }
        if (strlen($value) >= 2 && $value[0] === "'" && substr($value, -1) === "'") {
            return str_replace("''", "'", substr($value, 1, -1));
        }
        return $value;
    }

    private static function inline(string $text): string
    {
        // Escape source HTML first: supplied articles are Markdown, not trusted HTML.
        $text = e($text);
        $text = preg_replace('/`([^`]+)`/', '<code>$1</code>', $text) ?? $text;
        $text = preg_replace('/\*\*([^*]+)\*\*/', '<strong>$1</strong>', $text) ?? $text;
        $text = preg_replace('/__([^_]+)__/', '<strong>$1</strong>', $text) ?? $text;
        $text = preg_replace('/(?<!\*)\*([^*\n]+)\*(?!\*)/', '<em>$1</em>', $text) ?? $text;
        $text = preg_replace('/(?<!_)_([^_\n]+)_(?!_)/', '<em>$1</em>', $text) ?? $text;
        $text = preg_replace_callback(
            '/\[([^\]]+)\]\((https?:\/\/[^)\s]+)\)/',
            fn ($m) => '<a href="'.e($m[2]).'" target="_blank" rel="noopener noreferrer">'.$m[1].'</a>',
            $text
        ) ?? $text;
        return $text;
    }

    private static function markdownToHtml(string $markdown): string
    {
        $lines = preg_split('/\n/', str_replace(["\r\n", "\r"], "\n", $markdown)) ?: [];
        $html = '';
        $paragraph = [];
        $listType = null;
        $firstH1Skipped = false;

        $closeList = function () use (&$html, &$listType): void {
            if ($listType !== null) {
                $html .= '</'.$listType.'>';
                $listType = null;
            }
        };
        $flushParagraph = function () use (&$html, &$paragraph): void {
            if ($paragraph !== []) {
                $html .= '<p>'.self::inline(trim(implode(' ', $paragraph))).'</p>';
                $paragraph = [];
            }
        };

        foreach ($lines as $line) {
            $trim = trim($line);
            if ($trim === '') {
                $flushParagraph();
                $closeList();
                continue;
            }

            if (preg_match('/^(#{1,6})\s+(.+)$/', $trim, $m)) {
                $flushParagraph();
                $closeList();
                $level = strlen($m[1]);
                $text = self::inline($m[2]);
                if ($level === 1 && !$firstH1Skipped) {
                    $firstH1Skipped = true;
                    continue;
                }
                $level = min(max($level, 2), 4);
                $html .= '<h'.$level.'>'.$text.'</h'.$level.'>';
                continue;
            }

            if (preg_match('/^>\s?(.*)$/', $trim, $m)) {
                $flushParagraph();
                $closeList();
                $html .= '<blockquote>'.self::inline($m[1]).'</blockquote>';
                continue;
            }

            if (preg_match('/^[-*]\s+(.+)$/', $trim, $m)) {
                $flushParagraph();
                if ($listType !== 'ul') {
                    $closeList();
                    $html .= '<ul>';
                    $listType = 'ul';
                }
                $html .= '<li>'.self::inline($m[1]).'</li>';
                continue;
            }

            if (preg_match('/^\d+\.\s+(.+)$/', $trim, $m)) {
                $flushParagraph();
                if ($listType !== 'ol') {
                    $closeList();
                    $html .= '<ol>';
                    $listType = 'ol';
                }
                $html .= '<li>'.self::inline($m[1]).'</li>';
                continue;
            }

            if (preg_match('/^---+$/', $trim)) {
                $flushParagraph();
                $closeList();
                $html .= '<hr>';
                continue;
            }

            $paragraph[] = $trim;
        }

        $flushParagraph();
        $closeList();
        return $html;
    }
}
