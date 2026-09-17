@vite ('resources/css/home/katalog.css')
@php
    $categories = \App\Data\TrainingCatalog::categories();
    $total = count(\App\Data\TrainingCatalog::all());
    $icons = [
        'personil-manajemen' => 'ri-shield-star-fill',
        'alat-berat-angkat-angkut' => 'ri-truck-fill',
        'pesawat-tenaga-produksi-uap' => 'ri-settings-3-fill',
        'konstruksi-las-ketinggian' => 'ri-building-fill',
        'hse-migas-tambang-offshore' => 'ri-oil-fill',
        'lingkungan-limbah' => 'ri-leaf-fill',
        'sektoral-umum' => 'ri-briefcase-fill',
    ];
@endphp
<section class="catalog-section">
    <div class="container catalog-container">
        <div class="catalog-header">
            <span class="catalog-eyebrow"> DIREKTORI LENGKAP </span>

            <h2 class="catalog-title">
                Katalog
                <span>{{ $total }}+ Sertifikasi & Pelatihan</span>
                K3
            </h2>

            <p class="catalog-description">Telusuri berbagai program pelatihan dan sertifikasi K3 berdasarkan kebutuhan industri Anda.</p>
        </div>

        {{-- Category Filter --}}
        <div class="catalog-filters" role="tablist" aria-label="Kelompok katalog">
            <button type="button" class="catalog-filter active" data-category="all" role="tab" aria-selected="true">
                Semua Kelompok
                <span>{{ $total }}+</span>
            </button>

            @foreach ($categories as $key => $meta)
                <button type="button" class="catalog-filter" data-category="{{ $key }}" role="tab" aria-selected="false">
                    {{ $meta['label'] }}
                </button>
            @endforeach
        </div>

        {{-- Catalog Groups --}}
        <div class="catalog-groups">
            @foreach ($categories as $key => $meta)
                <div class="catalog-group" data-category="{{ $key }}">
                    @include('partials.katalog.group', ['category' => $key, 'icon' => $icons[$key]])
                </div>
            @endforeach
        </div>
    </div>
</section>
