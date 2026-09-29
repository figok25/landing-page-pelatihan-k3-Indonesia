<?php

namespace App\Http\Controllers;

use App\Data\ArticleRepository;
use App\Data\RegionCatalog;
use App\Data\ServiceCatalog;

class ServiceController extends Controller
{
    /** GET /jasa */
    public function index()
    {
        return view('pages.services', [
            'services' => ServiceCatalog::primary(),
            'categories' => ServiceCatalog::categories(),
        ]);
    }

    /** GET /jasa/{service} */
    public function show(string $service)
    {
        $item = ServiceCatalog::findBySlug($service);
        abort_if($item === null || $item['type'] !== 'primary', 404);

        $article = ArticleRepository::find('jasa', $service);
        abort_if($article === null, 404);

        return view('services.show', [
            'service' => $item,
            'article' => $article,
            'regions' => RegionCatalog::citiesGroupedByProvince(),
        ]);
    }

    /** GET /jasa/{service}/{kota} */
    public function location(string $service, string $kota)
    {
        $item = ServiceCatalog::findBySlug($service);
        $city = RegionCatalog::findCityBySlug($kota);

        abort_if($item === null || $item['type'] !== 'primary', 404);
        abort_if($city === null, 404);

        $article = ArticleRepository::find('jasa', $service);
        abort_if($article === null, 404);

        return view('services.show', [
            'service' => $item,
            'article' => $article,
            'city' => $city,
            'regions' => RegionCatalog::citiesGroupedByProvince(),
        ]);
    }
}
