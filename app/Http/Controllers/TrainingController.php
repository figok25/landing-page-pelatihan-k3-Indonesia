<?php

namespace App\Http\Controllers;

use App\Data\ArticleRepository;
use App\Data\RegionCatalog;
use App\Data\TrainingCatalog;

class TrainingController extends Controller
{
    /** GET /pelatihan */
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

        return view('pages.training', ['grouped' => $grouped]);
    }

    /** GET /pelatihan/{training} */
    public function show(string $training)
    {
        $item = TrainingCatalog::findBySlug($training);
        abort_if($item === null, 404);

        $article = ArticleRepository::find('pelatihan', $training);
        abort_if($article === null, 404);

        return view('training.show', [
            'training' => $item,
            'article' => $article,
            'regions' => RegionCatalog::citiesGroupedByProvince(),
        ]);
    }

    /** GET /pelatihan/{training}/{kota} */
    public function location(string $training, string $kota)
    {
        $item = TrainingCatalog::findBySlug($training);
        $city = RegionCatalog::findCityBySlug($kota);

        abort_if($item === null, 404);
        abort_if($city === null, 404);

        $article = ArticleRepository::find('pelatihan', $training);
        abort_if($article === null, 404);

        return view('training.show', [
            'training' => $item,
            'article' => $article,
            'city' => $city,
            'regions' => RegionCatalog::citiesGroupedByProvince(),
        ]);
    }
}
