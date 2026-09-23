<?php

namespace App\Http\Controllers;

use App\Data\RegionCatalog;
use App\Data\TrainingCatalog;

class TrainingController extends Controller
{
    /**
     * GET /pelatihan
     * Katalog seluruh 169 program, dikelompokkan per kategori.
     */
    public function index()
    {
        $trainings = TrainingCatalog::all();
        $categories = TrainingCatalog::categories();

        $grouped = [];
        foreach ($categories as $key => $meta) {
            $grouped[$key] = [
                'label' => $meta['label'],
                'items' => array_values(array_filter(
                    $trainings,
                    fn ($t) => $t['category'] === $key
                )),
            ];
        }

        return view('pages.training', [
            'grouped' => $grouped,
        ]);
    }

    /**
     * GET /pelatihan/{training}
     * Halaman detail satu program (SEO Level 1).
     */
    public function show(string $training)
    {
        $item = TrainingCatalog::findBySlug($training);

        abort_if($item === null, 404);

        return view('training.show', [
            'training' => $item,
            'regions' => RegionCatalog::citiesGroupedByProvince(),
        ]);
    }

    /**
     * GET /pelatihan/{training}/{kota}
     * Halaman regional (SEO Level 2) — dibuka untuk seluruh 514
     * kabupaten/kota (bukan hanya whitelist SeoPriorityCatalog), supaya
     * dropdown "Pilih Wilayah" di halaman ini selalu mengarah ke halaman
     * yang benar-benar merespons 200. Halaman ini tetap noindex (lihat
     * layouts/head.blade.php), dan sitemap.xml TETAP hanya memuat
     * kombinasi prioritas dari SeoPriorityCatalog — jangan generate
     * sitemap massal dari sini.
     */
    public function location(string $training, string $kota)
    {
        $item = TrainingCatalog::findBySlug($training);
        $city = RegionCatalog::findCityBySlug($kota);

        abort_if($item === null, 404);
        abort_if($city === null, 404);

        return view('training.show', [
            'training' => $item,
            'city' => $city,
            'regions' => RegionCatalog::citiesGroupedByProvince(),
        ]);
    }
}
