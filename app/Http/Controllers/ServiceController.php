<?php

namespace App\Http\Controllers;

use App\Data\RegionCatalog;
use App\Data\SeoPriorityCatalog;
use App\Data\ServiceCatalog;

class ServiceController extends Controller
{
    /**
     * GET /jasa
     * Hanya menampilkan layanan utama (type=primary) — 3 baris
     * "keyword_variant" di data client tidak ditampilkan sebagai card
     * terpisah, lihat catatan di ServiceCatalog.
     */
    public function index()
    {
        return view('pages.services', [
            'services' => ServiceCatalog::primary(),
            'categories' => ServiceCatalog::categories(),
        ]);
    }

    /**
     * GET /jasa/{service}
     */
    public function show(string $service)
    {
        $item = ServiceCatalog::findBySlug($service);

        abort_if($item === null || $item['type'] !== 'primary', 404);

        return view('services.show', [
            'service' => $item,
        ]);
    }

    /**
     * GET /jasa/{service}/{kota}
     * Sama seperti TrainingController::location() — hanya kombinasi yang
     * sudah disetujui di SeoPriorityCatalog yang dibuatkan halaman.
     */
    public function location(string $service, string $kota)
    {
        $item = ServiceCatalog::findBySlug($service);
        $city = RegionCatalog::findCityBySlug($kota);

        abort_if($item === null || $item['type'] !== 'primary', 404);
        abort_if($city === null, 404);
        abort_unless(SeoPriorityCatalog::isServiceLocationAllowed($service, $kota), 404);

        return view('seo.service-location', [
            'service' => $item,
            'city' => $city,
        ]);
    }
}
