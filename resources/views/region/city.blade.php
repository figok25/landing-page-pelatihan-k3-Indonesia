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
        POPULAR TRAININGS
    ======================================== --}}

    <section class="city-training-section"
             id="popular-trainings">

        <div class="container">

            <div class="section-heading city-section-heading">

                <div>
                    <span class="section-eyebrow">
                        PROGRAM PELATIHAN
                    </span>

                    <h2>
                        Pelatihan Populer di
                        {{ $city['name'] }}
                    </h2>

                    <p>
                        Temukan program pelatihan K3 yang
                        sesuai dengan kebutuhan Anda.
                    </p>
                </div>

                <a href="{{ route('training.index') }}"
                   class="section-view-all">
                    Lihat Semua
                    <i class="bx bx-right-arrow-alt"></i>
                </a>

            </div>


            @if (count($popularTrainings) > 0)

                <div class="city-training-grid">

                    @foreach ($popularTrainings as $training)

                        <a href="{{ route('training.location', ['training' => $training['slug'], 'kota' => $city['slug']]) }}"
                           class="city-training-card">

                            <div class="city-training-card-top">

                                <span class="city-training-label">
                                    PELATIHAN K3
                                </span>

                                <div class="city-training-arrow">
                                    <i class="bx bx-right-arrow-alt"></i>
                                </div>

                            </div>

                            <h3>
                                {{ $training['name'] }}
                            </h3>

                            <div class="city-training-card-footer">

                                <span>
                                    <i class="bx bx-map-pin"></i>
                                    {{ $city['name'] }}
                                </span>

                                <span class="city-training-detail">
                                    Selengkapnya
                                    <i class="bx bx-chevron-right"></i>
                                </span>

                            </div>

                        </a>

                    @endforeach

                </div>

            @else

                <div class="city-empty-state">
                    <i class="bx bx-book-open"></i>
                    <h3>Program Segera Hadir</h3>
                    <p>
                        Hubungi kami untuk informasi
                        program pelatihan yang tersedia.
                    </p>
                </div>

            @endif

        </div>

    </section>


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