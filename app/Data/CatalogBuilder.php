<?php

namespace App\Data;

/**
 * Menyusun kelompok katalog (pelatihan + jasa) untuk view.
 * Jika $city diberikan, link mengarah ke halaman regional kota tersebut.
 */
class CatalogBuilder
{
    public static function groups(?array $city = null): array
    {
        $groups = [];

        foreach (TrainingCatalog::categories() as $key => $meta) {
            $items = [];
            foreach (TrainingCatalog::byCategory($key) as $item) {
                $c = TrainingContent::for($item['slug'], $item['name']);
                $items[] = [
                    'title' => 'Pelatihan ' . $item['name'],
                    'badge' => $c['badge'],
                    'desc' => $c['description'],
                    'url' => $city
                        ? route('training.location', ['training' => $item['slug'], 'kota' => $city['slug']])
                        : route('training.show', ['training' => $item['slug']]),
                ];
            }
            $groups[] = ['key' => $key, 'letter' => $meta['letter'], 'label' => $meta['label'], 'kind' => 'Pelatihan', 'items' => $items];
        }

        foreach (ServiceCatalog::categories() as $key => $meta) {
            $items = [];
            foreach (ServiceCatalog::byCategory($key) as $item) {
                $c = ServiceContent::for($item['slug'], $item['name']);
                $items[] = [
                    'title' => $item['name'],
                    'badge' => $c['badge'],
                    'desc' => $c['description'],
                    'url' => $city
                        ? route('service.location', ['service' => $item['slug'], 'kota' => $city['slug']])
                        : route('service.show', ['service' => $item['slug']]),
                ];
            }
            $groups[] = ['key' => $key, 'letter' => $meta['letter'], 'label' => $meta['label'], 'kind' => 'Jasa', 'items' => $items];
        }

        return $groups;
    }

    /** Hanya satu jenis: 'Pelatihan' atau 'Jasa'. */
    public static function only(string $kind, ?array $city = null): array
    {
        return array_values(array_filter(self::groups($city), fn ($g) => $g['kind'] === $kind));
    }
}
