<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');

// Katalog pelatihan (Level 1) + halaman program.
Route::get('/pelatihan', [TrainingController::class, 'index'])->name('training.index');

// Redirect slug lama ke artikel baru yang sudah menjadi sumber utama.
Route::redirect('/pelatihan/ahli-bejana-tekan-tangki-timbun', '/pelatihan/ahli-bejana-tekan-dan-tangki-timbun', 301);
Route::redirect('/pelatihan/blasting-coating', '/pelatihan/blasting-dan-coating', 301);
Route::redirect('/pelatihan/lift-eskalator', '/pelatihan/lift', 301);
Route::redirect('/pelatihan/operator-mesin-produksi-perkakas', '/pelatihan/operator-mesin-produksi-dan-perkakas', 301);
Route::redirect('/pelatihan/operator-pesawat-tenaga-produksi-ptp', '/pelatihan/operator-pesawat-tenaga-dan-produksi-ptp', 301);
Route::redirect('/pelatihan/pelatihan-perkapalan', '/pelatihan/perkapalan', 301);
Route::redirect('/pelatihan/penanggungjawab-pengendalian-pencemaran-udara-pppu', '/pelatihan/penanggungjawab-pengendalian-pencemaran-udara-pppu-dan', 301);
Route::redirect('/pelatihan/pesawat-angkat-pesawat-angkut', '/pelatihan/pesawat-angkat-dan-pesawat-angkut', 301);
Route::redirect('/pelatihan/sea-survival-huet-bosiet-t-bosiet', '/pelatihan/sea-survival-huet-bosiet-dan-t-bosiet', 301);
Route::redirect('/pelatihan/teknisi-bejana-tekan-tangki-timbun', '/pelatihan/teknisi-bejana-tekan-dan-tangki-timbun', 301);
Route::redirect('/pelatihan/turbin-uap-gas', '/pelatihan/turbin-uap-dan-gas', 301);
Route::redirect('/jasa/jasa-ukl-upl-amdal-pertek-rintek', '/jasa/jasa-ukl-upl-amdal-pertek-rintek-uji-lingkungan', 301);
Route::redirect('/jasa/jasa-sertifikat-laik-fungsi-dan-nomor-induk-data-instalasi', '/jasa/jasa-sertifikat-laik-fungsi-slf-dan-nomor-induk-data-instalasi-nidi', 301);
Route::redirect('/jasa/jasa-sertifikat-laik-operasi', '/jasa/jasa-sertifikat-laik-operasi-slo', 301);
Route::redirect('/jasa/jasa-silo-sia-riksa-uji-alat', '/jasa/jasa-silo-surat-izin-layak-operasi-riksa-uji-sia-surat-izin-alat', 301);
Route::redirect('/jasa/jasa-sia-silo-riksa-uji-alat', '/jasa/jasa-sia-surat-izin-alat-silo-surat-izin-layak-operasi-riksa-uji', 301);
Route::redirect('/jasa/jasa-riksa-uji-silo-sia', '/jasa/jasa-riksa-uji-silo-surat-izin-layak-operasi-sia-surat-izin-alat', 301);
Route::redirect('/jasa/jasa-transportasi-pengelolaan-limbah-b3', '/jasa/jasa-transportasi-dan-pengelolaan-limbah-b3', 301);

Route::redirect('/jasa/silo', '/jasa/jasa-silo-surat-izin-layak-operasi', 301);

Route::redirect('/jasa/sia', '/jasa/jasa-sia-surat-izin-alat', 301);

Route::get('/pelatihan/{training}', [TrainingController::class, 'show'])->name('training.show');

// Halaman regional pelatihan (Level 2) — hanya kombinasi yang diizinkan
// SeoPriorityCatalog yang akan merespons 200, sisanya 404.
Route::get('/pelatihan/{training}/{kota}', [TrainingController::class, 'location'])->name('training.location');

// Katalog jasa (Level 1) + halaman jasa.
Route::get('/jasa', [ServiceController::class, 'index'])->name('service.index');
Route::get('/jasa/{service}', [ServiceController::class, 'show'])->name('service.show');

Route::get('/jasa/{service}/{kota}', [ServiceController::class, 'location'])->name('service.location');

Route::get('/kota/{kota}', [RegionController::class, 'city'])->name('region.city');

// Alias lama dari draft katalog awal: /artikel/{slug} -> /pelatihan/{slug}.
Route::redirect('/artikel/{training}', '/pelatihan/{training}', 301);

Route::get('/sitemap.xml', [SeoController::class, 'sitemap'])->name('sitemap');
