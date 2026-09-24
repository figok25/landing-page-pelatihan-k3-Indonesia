@vite ('resources/css/home/katalog.css')
@php
    $categories = \App\Data\TrainingCatalog::categories();
    $serviceCategories = \App\Data\ServiceCatalog::categories();
    $total = count(\App\Data\TrainingCatalog::all());
    $serviceTotal = count(\App\Data\ServiceCatalog::primary());
    $icons = [
        'personil-manajemen' => 'ri-shield-star-fill',
        'alat-berat-angkat-angkut' => 'ri-truck-fill',
        'pesawat-tenaga-produksi-uap' => 'ri-settings-3-fill',
        'konstruksi-las-ketinggian' => 'ri-building-fill',
        'hse-migas-tambang-offshore' => 'ri-oil-fill',
        'lingkungan-limbah' => 'ri-leaf-fill',
        'sektoral-umum' => 'ri-briefcase-fill',
    ];
    $serviceIcons = [
        'jasa-perizinan-riksa-uji' => 'ri-file-shield-2-fill',
        'jasa-kajian-teknis' => 'ri-file-search-fill',
        'jasa-lingkungan-limbah' => 'ri-recycle-fill',
        'jasa-lainnya' => 'ri-briefcase-4-fill',
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

            <p class="catalog-description">Telusuri berbagai program pelatihan dan jasa K3 sesuai kebutuhan industri Anda.</p>
        </div>

        {{-- Category Filter --}}
        <div class="catalog-filters" role="tablist" aria-label="Kelompok katalog">
            <button type="button" class="catalog-filter active" data-category="all" role="tab" aria-selected="true">
                Semua Kelompok
                <span>{{ $total + $serviceTotal }}+</span>
            </button>

            @foreach ($categories as $key => $meta)
                <button
                    type="button"
                    class="catalog-filter"
                    data-category="{{ $key }}"
                    role="tab"
                    aria-selected="false">
                    Pelatihan: {{ $meta['label'] }}
                </button>
            @endforeach

            @foreach ($serviceCategories as $key => $meta)
                <button
                    type="button"
                    class="catalog-filter"
                    data-category="{{ $key }}"
                    role="tab"
                    aria-selected="false">
                    {{ $meta['label'] }}
                </button>
            @endforeach
        </div>

        {{-- Catalog Groups --}}
        <div class="catalog-groups">
            @foreach ($categories as $key => $meta)
                <div class="catalog-group" data-category="{{ $key }}">
                    @include ('partials.katalog.group', ['category' => $key, 'icon' => $icons[$key], 'type' => 'training'])
                </div>
            @endforeach

            @foreach ($serviceCategories as $key => $meta)
                <div class="catalog-group" data-category="{{ $key }}">
                    @include ('partials.katalog.group', ['category' => $key, 'icon' => $serviceIcons[$key], 'type' => 'jasa'])
                </div>
            @endforeach
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filters = document.querySelectorAll('.catalog-filter');
        const groups = document.querySelectorAll('.catalog-group');

        filters.forEach((btn) => {
            btn.addEventListener('click', () => {
                const category = btn.dataset.category;

                filters.forEach((b) => b.classList.toggle('active', b === btn));
                filters.forEach((b) => b.setAttribute('aria-selected', b === btn ? 'true' : 'false'));

                groups.forEach((g) => {
                    g.style.display = category === 'all' || g.dataset.category === category ? '' : 'none';
                });
            });
        });
    });
</script>
