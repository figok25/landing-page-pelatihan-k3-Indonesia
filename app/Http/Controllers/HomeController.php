<?php

namespace App\Http\Controllers;

use App\Data\RegionCatalog;
use App\Data\ServiceCatalog;
use App\Data\TrainingCatalog;

class HomeController extends Controller
{
    public function index()
    {
        $trainings = TrainingCatalog::all();
        $services = ServiceCatalog::primary();

        return view('index', [
            // Program unggulan: tampilkan beberapa contoh saja di homepage,
            // JANGAN tampilkan seluruh 169 program sekaligus (blueprint #20).
            'featuredTrainings' => array_slice($trainings, 0, 6),
            'featuredServices' => array_slice($services, 0, 6),
            'stats' => [
                'total_trainings' => count($trainings),
                'total_services' => count($services),
                'total_provinces' => count(RegionCatalog::provinces()),
                'total_cities' => count(RegionCatalog::cities()),
            ],
        ]);
    }
}
