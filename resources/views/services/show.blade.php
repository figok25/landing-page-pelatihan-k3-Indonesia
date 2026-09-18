
@extends('layouts.master')

@section('title', $service['name'])

@section('description', 'Informasi jasa '.$service['name'].': ruang lingkup, manfaat, dan legalitas.')

@vite('resources/css/pages/service-show.css')

@section('content')
    {{-- Service Hero --}}
    <section class="service-hero">
        <div class="container">
            <div class="service-breadcrumb">
                <a href="{{ url('/') }}">Beranda</a>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ route('service.index') }}">Jasa</a>
                <i class="bx bx-chevron-right"></i>
                <span>{{ $service['name'] }}</span>
            </div>

            <div class="service-hero-content">
                <div class="service-hero-text">
                    <span class="section-badge">
                        <i class="bx bx-briefcase-alt-2"></i>
                        Jasa Konsultasi & Perizinan K3
                    </span>

                    <h1>{{ $service['name'] }}</h1>

                    <p>
                        Dapatkan layanan konsultasi dan perizinan K3 yang sesuai dengan
                        kebutuhan dan regulasi yang berlaku bagi perusahaan Anda.
                    </p>

                    <div class="service-hero-actions">
                        <a
                            href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai '.$service['name'].'.') }}"
                            target="_blank"
                            rel="noopener"
                            class="btn btn-primary">
                            Konsultasi Sekarang
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>

                        <a href="#service-information" class="btn btn-outline">
                            Lihat Informasi
                            <i class="bx bx-chevron-down"></i>
                        </a>
                    </div>
                </div>

                <div class="service-hero-visual">
                    <div class="service-visual-icon">
                        <i class="bx bx-shield-quarter"></i>
                    </div>

                    <span>Layanan Profesional</span>
                    <strong>Konsultasi & Perizinan K3</strong>

                    <div class="service-visual-decoration decoration-one"></div>
                    <div class="service-visual-decoration decoration-two"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Service Information --}}
    <section class="service-information section-padding" id="service-information">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-badge">Informasi Layanan</span>
                <h2>Informasi Jasa</h2>
                <p>
                    Informasi lengkap mengenai layanan
                    {{ $service['name'] }}.
                </p>
            </div>

            <div class="service-information-grid">
                <div class="service-info-card">
                    <div class="service-info-icon">
                        <i class="bx bx-book-open"></i>
                    </div>
                    <h3>Deskripsi</h3>
                    <p>
                        {{-- Ganti dengan deskripsi resmi dari client --}}
                        Deskripsi layanan akan disesuaikan dengan data
                        resmi dan kebutuhan perusahaan.
                    </p>
                </div>

                <div class="service-info-card">
                    <div class="service-info-icon">
                        <i class="bx bx-target-lock"></i>
                    </div>
                    <h3>Ruang Lingkup</h3>
                    <p>
                        {{-- Ganti dengan ruang lingkup resmi dari client --}}
                        Mencakup kajian, pemeriksaan, dan/atau pengurusan
                        sesuai jenis layanan yang dipilih.
                    </p>
                </div>

                <div class="service-info-card">
                    <div class="service-info-icon">
                        <i class="bx bx-user-check"></i>
                    </div>
                    <h3>Manfaat</h3>
                    <p>
                        {{-- Ganti dengan manfaat resmi dari client --}}
                        Membantu perusahaan memenuhi kepatuhan regulasi
                        dan standar keselamatan kerja.
                    </p>
                </div>

                <div class="service-info-card">
                    <div class="service-info-icon">
                        <i class="bx bx-award"></i>
                    </div>
                    <h3>Legalitas</h3>
                    <p>
                        {{-- Ganti dengan dasar hukum/legalitas resmi --}}
                        Mengikuti dasar hukum dan ketentuan yang berlaku
                        untuk jenis layanan terkait.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Service Details --}}
    <section class="service-details section-padding">
        <div class="container">
            <div class="service-details-grid">
                <div class="service-details-content">
                    <span class="section-badge">Detail Layanan</span>

                    <h2>Cakupan dan Proses Pengerjaan</h2>

                    <p>
                        Setiap layanan dirancang untuk membantu perusahaan
                        memenuhi kebutuhan kepatuhan dan keselamatan kerja
                        secara menyeluruh.
                    </p>

                    <div class="service-detail-block">
                        <h3>
                            <i class="bx bx-list-check"></i>
                            Cakupan Layanan
                        </h3>

                        <ul>
                            {{-- Ganti dengan cakupan resmi dari client --}}
                            <li>Konsultasi awal kebutuhan dan regulasi terkait</li>
                            <li>Pemeriksaan/kajian teknis di lapangan</li>
                            <li>Penyusunan dokumen dan laporan</li>
                            <li>Pendampingan hingga proses selesai</li>
                        </ul>
                    </div>

                    <div class="service-detail-block">
                        <h3>
                            <i class="bx bx-chalkboard"></i>
                            Proses Pengerjaan
                        </h3>

                        <p>
                            {{-- Ganti dengan proses resmi dari client --}}
                            Proses pengerjaan dapat mencakup survei awal,
                            pengumpulan data, analisis, hingga penerbitan
                            dokumen sesuai kebutuhan layanan.
                        </p>
                    </div>
                </div>

                <aside class="service-summary-card">
                    <div class="service-summary-header">
                        <i class="bx bx-info-circle"></i>
                        <h3>Ringkasan Layanan</h3>
                    </div>

                    <div class="service-summary-item">
                        <span>
                            <i class="bx bx-time-five"></i>
                            Estimasi Waktu
                        </span>
                        <strong>Menyesuaikan Layanan</strong>
                    </div>

                    <div class="service-summary-item">
                        <span>
                            <i class="bx bx-map"></i>
                            Area Layanan
                        </span>
                        <strong>Seluruh Indonesia</strong>
                    </div>

                    <div class="service-summary-item">
                        <span>
                            <i class="bx bx-certification"></i>
                            Legalitas
                        </span>
                        <strong>Sesuai Ketentuan</strong>
                    </div>

                    <div class="service-summary-item">
                        <span>
                            <i class="bx bx-group"></i>
                            Peserta
                        </span>
                        <strong>Individu / Perusahaan</strong>
                    </div>

                    <a
                        href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin berkonsultasi mengenai '.$service['name'].'.') }}"
                        target="_blank"
                        rel="noopener"
                        class="btn btn-primary btn-block">
                        Hubungi Admin
                        <i class="bx bx-right-arrow-alt"></i>
                    </a>
                </aside>
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="service-cta section-padding">
        <div class="container">
            <div class="service-cta-content">
                <div>
                    <span class="section-badge">Butuh Informasi Lebih Lanjut?</span>

                    <h2>Siap Menggunakan Jasa Kami?</h2>

                    <p>
                        Konsultasikan kebutuhan layanan Anda bersama tim
                        kami untuk mendapatkan informasi lingkup kerja,
                        estimasi waktu, dan biaya.
                    </p>
                </div>

                <a
                    href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai '.$service['name'].'.') }}"
                    target="_blank"
                    rel="noopener"
                    class="btn btn-light">
                    Konsultasi Sekarang
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
