<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Daftarkan resources/views/layouts sebagai lokasi komponen anonim
        // tambahan, supaya <x-layouts.app> bisa dipakai sesuai struktur
        // folder pada blueprint (views/layouts/app.blade.php), tanpa perlu
        // memindah file layout ke folder views/components.
        Blade::anonymousComponentPath(resource_path('views/layouts'), 'layouts');
    }
}
