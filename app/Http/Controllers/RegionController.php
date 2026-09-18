<?php

namespace App\Http\Controllers;

use App\Data\KecamatanCatalog;
use App\Data\RegionCatalog;
use App\Data\TrainingCatalog;

class RegionController extends Controller
{
    /**
     * GET /kota/{kota}
     * Halaman hub generik per kota: CTA + beberapa link pelatihan prioritas.
     * TIDAK me-render seluruh 169 program per kota (hindari duplicate
     * content / mass-generate, sesuai keputusan sebelumnya).
     */
    public function city(string $kota)
    {
        $city = RegionCatalog::findCityBySlug($kota);

        abort_if($city === null, 404);

        return view('region.city', [
            'city' => $city,
            'kecamatan' => KecamatanCatalog::forCity($city['code']),
            // Contoh pelatihan populer sebagai starting point, bukan katalog penuh.
            'popularTrainings' => array_slice(TrainingCatalog::all(), 0, 6),
        ]);
    }
}