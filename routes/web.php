<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');

// Katalog pelatihan (Level 1) + halaman program.
Route::get('/pelatihan', [TrainingController::class, 'index'])->name('training.index');
Route::get('/pelatihan/{training}', [TrainingController::class, 'show'])->name('training.show');

// Halaman regional pelatihan (Level 2) — hanya kombinasi yang diizinkan
// SeoPriorityCatalog yang akan merespons 200, sisanya 404.
Route::get('/pelatihan/{training}/{kota}', [TrainingController::class, 'location'])->name('training.location');

// Katalog jasa (Level 1) + halaman jasa.
Route::get('/jasa', [ServiceController::class, 'index'])->name('service.index');
Route::get('/jasa/{service}', [ServiceController::class, 'show'])->name('service.show');

// Halaman regional jasa (Level 2), sama aturannya dengan pelatihan.
Route::get('/jasa/{service}/{kota}', [ServiceController::class, 'location'])->name('service.location');

Route::get('/sitemap.xml', [SeoController::class, 'sitemap'])->name('sitemap');
