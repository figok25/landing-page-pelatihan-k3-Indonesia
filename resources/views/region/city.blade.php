@extends('layouts.master')

@section('title', 'Pelatihan & Jasa K3 di '.$city['name'])

@section(
    'description',
    'Layanan pelatihan dan jasa K3 di '.$city['type'].' '.$city['name'].', '.$city['province'].'.'
)

@vite('resources/css/pages/city.css')

@section('content')

    {{-- ========================================
        CITY HERO
    ======================================== --}}

    <section class="city-hero">

        <div class="city-hero-decoration city-hero-decoration-one"></div>
        <div class="city-hero-decoration city-hero-decoration-two"></div>

        <div class="container city-hero-container">

            <div class="city-breadcrumb">
                <a href="{{ route('home') }}">
                    <i class="bx bx-home-alt"></i>
                    Beranda
                </a>

                <i class="bx bx-chevron-right"></i>

                <span>{{ $city['name'] }}</span>
            </div>

            <div class="city-hero-content">

                <span class="city-badge">
                    <i class="bx bx-map-pin"></i>
                    LAYANAN K3 INDONESIA
                </span>

                <h1 class="city-title">
                    Pelatihan & Jasa K3
                    <span>
                        di {{ $city['type'] }} {{ $city['name'] }}
                    </span>
                </h1>

                <p class="city-province">
                    <i class="bx bx-map"></i>
                    {{ $city['province'] }}
                </p>

                <p class="city-hero-description">
                    Kami melayani kebutuhan pelatihan in-house,
                    sertifikasi personil, dan riksa uji kelayakan
                    teknis di {{ $city['type'] }} {{ $city['name'] }}
                    dan sekitarnya.
                </p>

                <div class="city-hero-actions">

                    <a href="#popular-trainings"
                       class="city-btn city-btn-outline">
                        Lihat Pelatihan
                        <i class="bx bx-down-arrow-alt"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- ========================================
        CITY SERVICE OVERVIEW
    ======================================== --}}

    <section class="city-overview">

        <div class="container">

            <div class="city-overview-grid">

                <div class="city-overview-card">
                    <div class="city-overview-icon">
                        <i class="bx bx-book-open"></i>
                    </div>

                    <div>
                        <h3>Pelatihan K3</h3>
                        <p>
                            Program pelatihan untuk meningkatkan
                            kompetensi keselamatan kerja.
                        </p>
                    </div>
                </div>

                <div class="city-overview-card">
                    <div class="city-overview-icon city-overview-icon-gold">
                        <i class="bx bx-certification"></i>
                    </div>

                    <div>
                        <h3>Sertifikasi Personil</h3>
                        <p>
                            Dukungan pengembangan kompetensi
                            dan sertifikasi tenaga kerja.
                        </p>
                    </div>
                </div>

                <div class="city-overview-card">
                    <div class="city-overview-icon">
                        <i class="bx bx-shield-quarter"></i>
                    </div>

                    <div>
                        <h3>Riksa Uji Teknis</h3>
                        <p>
                            Layanan terkait pemeriksaan dan
                            pengujian teknis sesuai kebutuhan.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section>


    {{-- ========================================
        FULL TRAINING CATALOG
    ======================================== --}}

    <section class="city-training-section"
             id="popular-trainings">

        <div class="container">

            <div class="city-catalog-heading">

                <span class="section-eyebrow">
                    DIREKTORI LENGKAP
                </span>

                <h2>
                    Katalog
                    <span>{{ count($trainings) }}+ Sertifikasi &amp; Pelatihan</span>
                    K3
                </h2>

                <p class="city-catalog-description">
                    Telusuri berbagai program pelatihan dan sertifikasi K3 berdasarkan kebutuhan industri Anda.
                </p>

                <p class="city-catalog-location">
                    Tersedia Public Batch &amp; In-House di {{ $city['type'] }} {{ $city['name'] }}
                </p>

            </div>

            <div class="city-catalog-search">
                <i class="bx bx-search"></i>
                <input
                    type="text"
                    id="cityCatalogSearch"
                    placeholder="Cari pelatihan: Forklift, Crane, Ahli K3 Umum, Scaffolding, POP Minerba, Boiler..."
                    aria-label="Cari program pelatihan dan sertifikasi K3">
            </div>

            <div class="city-catalog-tabs" id="cityCatalogTabs">

                <button type="button"
                        class="city-catalog-tab is-active"
                        data-category="all">
                    Semua Kelompok
                    <span>{{ count($trainings) }}+</span>
                </button>

                @foreach ($categories as $key => $meta)

                    @if (count($grouped[$key]['items']) > 0)

                        <button type="button"
                                class="city-catalog-tab"
                                data-category="{{ $key }}">
                            {{ $meta['label'] }}
                        </button>

                    @endif

                @endforeach

            </div>

            <p class="city-catalog-count" id="cityCatalogCount">
                Menampilkan {{ count($trainings) }} dari {{ count($trainings) }} program
            </p>

            <div class="city-training-grid" id="cityCatalogGrid">

                @foreach ($trainings as $training)

                    @php $trainingContent = \App\Data\TrainingContent::for($training['slug'], $training['name']); @endphp

                    <a href="{{ route('training.location', ['training' => $training['slug'], 'kota' => $city['slug']]) }}"
                       class="city-training-card"
                       data-category="{{ $training['category'] }}"
                       data-name="{{ strtolower($training['name']) }}">

                        <div class="city-training-card-top">

                            <span class="city-training-label">
                                {{ $trainingContent['badge'] }}
                            </span>

                            <span class="city-training-group">
                                {{ $categories[$training['category']]['label'] }}
                            </span>

                        </div>

                        <h3>
                            {{ $training['name'] }}
                        </h3>

                        <p class="city-training-description">
                            Program pelatihan dan sertifikasi K3 sesuai kebutuhan industri Anda.
                        </p>

                        <div class="city-training-card-divider"></div>

                        <div class="city-training-card-footer">

                            <span class="city-training-status">
                                {{ $city['type'] }} {{ $city['name'] }}
                            </span>

                            <span class="city-training-detail">
                                Selengkapnya
                                <i class="bx bx-right-arrow-alt"></i>
                            </span>

                        </div>

                    </a>

                @endforeach

            </div>

            <div class="city-empty-state"
                 id="cityCatalogEmpty"
                 hidden>
                <i class="bx bx-search-alt"></i>
                <h3>Program Tidak Ditemukan</h3>
                <p>
                    Coba kata kunci lain atau pilih kategori
                    yang berbeda.
                </p>
            </div>

        </div>

    </section>

    @push('scripts')
        <script>
            (function () {
                const searchInput = document.getElementById('cityCatalogSearch');
                const tabs = document.querySelectorAll('#cityCatalogTabs .city-catalog-tab');
                const cards = document.querySelectorAll('#cityCatalogGrid .city-training-card');
                const countEl = document.getElementById('cityCatalogCount');
                const emptyEl = document.getElementById('cityCatalogEmpty');
                const totalCount = cards.length;

                let activeCategory = 'all';

                function applyFilter() {
                    const keyword = (searchInput?.value || '').trim().toLowerCase();
                    let visible = 0;

                    cards.forEach((card) => {
                        const matchesCategory = activeCategory === 'all' || card.dataset.category === activeCategory;
                        const matchesKeyword = keyword === '' || card.dataset.name.includes(keyword);
                        const show = matchesCategory && matchesKeyword;

                        card.style.display = show ? '' : 'none';

                        if (show) visible++;
                    });

                    if (countEl) {
                        countEl.textContent = 'Menampilkan ' + visible + ' dari ' + totalCount + ' program';
                    }

                    if (emptyEl) {
                        emptyEl.hidden = visible !== 0;
                    }
                }

                tabs.forEach((tab) => {
                    tab.addEventListener('click', () => {
                        tabs.forEach((t) => t.classList.remove('is-active'));
                        tab.classList.add('is-active');
                        activeCategory = tab.dataset.category;
                        applyFilter();
                    });
                });

                searchInput?.addEventListener('input', applyFilter);
            })();
        </script>
    @endpush



    {{-- ========================================
        COVERAGE AREA
    ======================================== --}}

    @if ($kecamatan)

        <section class="city-coverage-section">

            <div class="container">

                <div class="city-coverage-card">

                    <div class="city-coverage-icon">
                        <i class="bx bx-map"></i>
                    </div>

                    <div>
                        <span class="section-eyebrow">
                            AREA LAYANAN
                        </span>

                        <h2>
                            Cakupan Kecamatan
                        </h2>

                        <p>
                            {{ $kecamatan }}
                        </p>
                    </div>

                </div>

            </div>

        </section>

    @endif


    {{-- ========================================
        FINAL CTA
    ======================================== --}}

    <section class="city-cta-section">

        <div class="container">

            <div class="city-cta-card">

                <div class="city-cta-content">

                    <span class="city-cta-eyebrow">
                        BUTUH INFORMASI LEBIH LANJUT?
                    </span>

                    <h2>
                        Siap Meningkatkan
                        Kompetensi K3 Anda?
                    </h2>

                    <p>
                        Konsultasikan kebutuhan pelatihan dan
                        jasa K3 Anda bersama tim kami.
                    </p>

                </div>

                <a href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin bertanya mengenai pelatihan K3 di '.$city['name'].'.') }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="city-btn city-btn-cta">
                    <i class="bx bxl-whatsapp"></i>
                    Hubungi Kami
                    <i class="bx bx-right-arrow-alt"></i>
                </a>

            </div>

        </div>

    </section>

@endsection
