<?php

namespace App\Http\Controllers;

use App\Data\RegionCatalog;
use App\Data\SeoPriorityCatalog;
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
        foreach ($categories as $key => $label) {
            $grouped[$key] = [
                'label' => $label,
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
        ]);
    }

    /**
     * GET /pelatihan/{training}/{kota}
     * Halaman regional (SEO Level 2) — HANYA untuk kombinasi yang sudah
     * disetujui di SeoPriorityCatalog. Jangan ubah menjadi "selalu 200"
     * untuk sembarang slug kota, karena itu sama saja dengan generate
     * massal yang dilarang blueprint (#38).
     */
    public function location(string $training, string $kota)
    {
        $item = TrainingCatalog::findBySlug($training);
        $city = RegionCatalog::findCityBySlug($kota);

        abort_if($item === null, 404);
        abort_if($city === null, 404);
        abort_unless(SeoPriorityCatalog::isTrainingLocationAllowed($training, $kota), 404);

        return view('seo.training-location', [
            'training' => $item,
            'city' => $city,
        ]);
    }
}
