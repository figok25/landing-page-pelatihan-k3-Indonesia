@props (['items' => []])

{{-- $items: array of ['label' => string, 'url' => string|null (null = current/last item)] --}}
<nav aria-label="Breadcrumb" class="mx-auto max-w-7xl px-4 pt-4 text-sm text-slate-500 lg:px-8">
    <ol class="flex flex-wrap items-center gap-1" itemscope itemtype="https://schema.org/BreadcrumbList">
        @foreach ($items as $index => $item)
            <li
                class="flex items-center gap-1"
                itemprop="itemListElement"
                itemscope
                itemtype="https://schema.org/ListItem">
                @if (!empty($item['url']))
                    <a href="{{ $item['url'] }}" itemprop="item" class="hover:text-emerald-700">
                        <span itemprop="name">{{ $item['label'] }}</span>
                    </a>
                @else
                    <span itemprop="name" class="text-slate-700">{{ $item['label'] }}</span>
                @endif
                <meta itemprop="position" content="{{ $index + 1 }}" />
                @if (!$loop->last)
                    <span>/</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
