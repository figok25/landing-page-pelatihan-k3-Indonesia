<?php

namespace App\Http\Controllers;

use App\Data\SeoPriorityCatalog;
use App\Data\ServiceCatalog;
use App\Data\TrainingCatalog;
use Illuminate\Http\Response;

class SeoController extends Controller
{
    /**
     * GET /sitemap.xml
     *
     * Hanya memuat halaman yang benar-benar dibuat: homepage, halaman
     * utama, seluruh program (Level 1), seluruh jasa utama (Level 1),
     * dan kombinasi regional (Level 2) yang ada di SeoPriorityCatalog.
     * Tidak memuat /admin atau /login karena memang tidak ada (blueprint #30).
     */
    public function sitemap(): Response
    {
        $urls = [];

        $urls[] = ['loc' => route('home'), 'priority' => '1.0'];
        $urls[] = ['loc' => route('about'), 'priority' => '0.5'];
        $urls[] = ['loc' => route('contact'), 'priority' => '0.5'];
        $urls[] = ['loc' => route('training.index'), 'priority' => '0.8'];
        $urls[] = ['loc' => route('service.index'), 'priority' => '0.8'];

        foreach (TrainingCatalog::all() as $training) {
            $urls[] = [
                'loc' => route('training.show', ['training' => $training['slug']]),
                'priority' => '0.7',
            ];
        }

        foreach (ServiceCatalog::primary() as $service) {
            $urls[] = [
                'loc' => route('service.show', ['service' => $service['slug']]),
                'priority' => '0.7',
            ];
        }

        foreach (SeoPriorityCatalog::trainingLocations() as $combo) {
            $urls[] = [
                'loc' => route('training.location', [
                    'training' => $combo['training_slug'],
                    'kota' => $combo['city_slug'],
                ]),
                'priority' => '0.6',
            ];
        }

        foreach (SeoPriorityCatalog::serviceLocations() as $combo) {
            $urls[] = [
                'loc' => route('service.location', [
                    'service' => $combo['service_slug'],
                    'kota' => $combo['city_slug'],
                ]),
                'priority' => '0.6',
            ];
        }

        $xml = view('seo.sitemap', ['urls' => $urls])->render();

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }
}
