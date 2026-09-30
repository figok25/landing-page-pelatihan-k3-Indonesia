<?php

namespace App\Http\Controllers;

use App\Data\CatalogBuilder;
use App\Data\KecamatanCatalog;
use App\Data\RegionCatalog;
use App\Data\ServiceCatalog;
use App\Data\TrainingCatalog;

class HomeController extends Controller
{
    public function index()
    {
        $trainings = TrainingCatalog::all();
        $services = ServiceCatalog::primary();

        $catalogGroups = CatalogBuilder::groups();

        // Seluruh wilayah: provinsi -> kota/kabupaten -> kecamatan.
        $regionGroups = [];
        foreach (RegionCatalog::provinces() as $province) {
            $cities = array_map(fn ($city) => [
                'name' => trim($city['type'] . ' ' . $city['name']),
                'url' => route('region.city', ['kota' => $city['slug']]),
                'kecamatan' => KecamatanCatalog::forCity($city['code']),
            ], RegionCatalog::citiesByProvinceSlug($province['slug']));
            $regionGroups[] = ['slug' => $province['slug'], 'name' => $province['name'], 'cities' => $cities];
        }

        return view('index', [
            'catalogGroups' => $catalogGroups,
            'regionGroups' => $regionGroups,
            'stats' => [
                'total_trainings' => count($trainings),
                'total_services' => count($services),
                'total_provinces' => count(RegionCatalog::provinces()),
                'total_cities' => count(RegionCatalog::cities()),
            ],
        ]);
    }
}
