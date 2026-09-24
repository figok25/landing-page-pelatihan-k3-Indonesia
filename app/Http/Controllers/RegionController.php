<?php

namespace App\Http\Controllers;

use App\Data\KecamatanCatalog;
use App\Data\RegionCatalog;
use App\Data\TrainingCatalog;

class RegionController extends Controller
{
    /**
     * GET /kota/{kota}
     * Halaman hub per kota: CTA + katalog lengkap seluruh program
     * pelatihan, setiap link mengarah ke halaman regional
     * (training.location) untuk kota terkait.
     *
     * CATATAN SEO: sebelumnya halaman ini sengaja hanya menampilkan
     * beberapa contoh pelatihan (bukan katalog penuh) untuk menghindari
     * duplicate content dari kombinasi 514 kota x 169 program. Atas
     * permintaan eksplisit klien, katalog penuh kini ditampilkan di sini.
     * Perlu dipantau dampaknya ke indexing/SEO ke depannya.
     */
    public function city(string $kota)
    {
        $city = RegionCatalog::findCityBySlug($kota);

        abort_if($city === null, 404);

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

        return view('region.city', [
            'city' => $city,
            'kecamatan' => KecamatanCatalog::forCity($city['code']),
            'trainings' => $trainings,
            'grouped' => $grouped,
            'categories' => $categories,
        ]);
    }
}
