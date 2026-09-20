
@extends('layouts.master')

@section('title', $training['name'])

@section('description', 'Informasi pelatihan '.$training['name'].': materi, persyaratan, durasi, dan sertifikasi.')

@vite('resources/css/pages/training-show.css')

@section('content')
    {{-- Training Hero --}}
    <section class="training-hero">
        <div class="container">
            <div class="training-breadcrumb">
                <a href="{{ url('/') }}">Beranda</a>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ route('training.index') }}">Pelatihan</a>
                <i class="bx bx-chevron-right"></i>
                <span>{{ $training['name'] }}</span>
            </div>

            <div class="training-hero-content">
                <div class="training-hero-text">
                    <span class="section-badge">
                        <i class="bx bx-certification"></i>
                        Program Pelatihan K3
                    </span>

                    @isset($city)
                        <span class="section-badge badge-location">
                            <i class="bx bx-map-pin"></i>
                            {{ $city['type'] }} {{ $city['name'] }}
                        </span>
                    @endisset

                    <h1>{{ $training['name'] }}</h1>

                    <p>
                        Tingkatkan kompetensi dan pemahaman Keselamatan
                        dan Kesehatan Kerja melalui program pelatihan
                        yang sesuai dengan kebutuhan perusahaan dan tenaga kerja.
                    </p>

                    <div class="training-hero-actions">
                        <a
                            href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai Pelatihan '.$training['name'].'.') }}"
                            target="_blank"
                            rel="noopener"
                            class="btn btn-primary">
                            Konsultasi Sekarang
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>

                        <a href="#training-information" class="btn btn-outline">
                            Lihat Informasi
                            <i class="bx bx-chevron-down"></i>
                        </a>
                    </div>
                </div>

                <div class="training-hero-visual">
                    <div class="training-visual-icon">
                        <i class="bx bx-book-bookmark"></i>
                    </div>

                    <span>Pelatihan Profesional</span>
                    <strong>Keselamatan & Kesehatan Kerja</strong>

                    <div class="training-visual-decoration decoration-one"></div>
                    <div class="training-visual-decoration decoration-two"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Training Information --}}
    <section class="training-information section-padding" id="training-information">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-badge">Informasi Program</span>
                <h2>Informasi Pelatihan</h2>
                <p>
                    Informasi lengkap mengenai program
                    {{ $training['name'] }}.
                </p>
            </div>

            <div class="training-information-grid">
                <div class="training-info-card">
                    <div class="training-info-icon">
                        <i class="bx bx-book-open"></i>
                    </div>
                    <h3>Deskripsi</h3>
                    <p>
                        {{-- Ganti dengan deskripsi resmi dari client --}}
                        Deskripsi program pelatihan akan disesuaikan
                        dengan data resmi dan kebutuhan peserta.
                    </p>
                </div>

                <div class="training-info-card">
                    <div class="training-info-icon">
                        <i class="bx bx-target-lock"></i>
                    </div>
                    <h3>Tujuan Pelatihan</h3>
                    <p>
                        {{-- Ganti dengan tujuan resmi dari client --}}
                        Membantu peserta memahami prinsip, prosedur,
                        dan penerapan K3 di lingkungan kerja.
                    </p>
                </div>

                <div class="training-info-card">
                    <div class="training-info-icon">
                        <i class="bx bx-user-check"></i>
                    </div>
                    <h3>Persyaratan</h3>
                    <p>
                        {{-- Ganti dengan persyaratan resmi dari client --}}
                        Persyaratan peserta mengikuti ketentuan
                        program dan lembaga penyelenggara.
                    </p>
                </div>

                <div class="training-info-card">
                    <div class="training-info-icon">
                        <i class="bx bx-award"></i>
                    </div>
                    <h3>Sertifikasi</h3>
                    <p>
                        {{-- Ganti dengan informasi sertifikasi resmi --}}
                        Informasi sertifikasi mengikuti skema dan
                        ketentuan yang berlaku untuk program terkait.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Artikel --}}
    <section class="training-article section-padding">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-badge">Artikel</span>
                <h2>Mengenal Lebih Dalam {{ $training['name'] }}</h2>
            </div>

            <article class="training-article-body">
                {{-- Artikel generik: template sama untuk semua program,
                hanya nama program yang berubah. Ganti dengan konten resmi
                dari client bila sudah tersedia. --}}
                <p>
                    {{ $training['name'] }} merupakan salah satu program yang
                    dirancang untuk membekali peserta dengan pemahaman dan
                    kompetensi di bidang Keselamatan dan Kesehatan Kerja (K3).
                    Program ini disusun mengikuti kebutuhan industri saat ini,
                    sehingga peserta dapat menerapkan prinsip-prinsip K3 secara
                    tepat di lingkungan kerja masing-masing.
                </p>
                <p>
                    Penerapan K3 yang baik tidak hanya membantu perusahaan
                    memenuhi ketentuan regulasi yang berlaku, tetapi juga
                    berperan penting dalam menciptakan lingkungan kerja yang
                    aman, sehat, dan produktif. Melalui program
                    {{ $training['name'] }}, peserta diajak memahami risiko
                    kerja, cara pengendaliannya, serta tanggung jawab masing-
                    masing pihak dalam menjaga keselamatan bersama.
                </p>
                <p>
                    Materi pada program {{ $training['name'] }} disampaikan
                    secara bertahap, mulai dari pemahaman dasar hingga
                    penerapan praktis, sehingga peserta dari berbagai latar
                    belakang dapat mengikuti dengan baik. Pendekatan ini
                    bertujuan agar pengetahuan yang diperoleh benar-benar dapat
                    diterapkan, bukan sekadar dipahami secara teori.
                </p>
                <p>
                    Selain aspek teknis, program {{ $training['name'] }} juga
                    menekankan pentingnya budaya keselamatan kerja sebagai
                    bagian dari kebiasaan sehari-hari, bukan hanya kewajiban
                    administratif. Hal ini sejalan dengan tujuan jangka panjang
                    untuk menurunkan angka kecelakaan kerja dan meningkatkan
                    kesadaran keselamatan di seluruh lini organisasi.
                </p>
                <p>
                    Bagi perusahaan, mengikutsertakan tenaga kerja dalam
                    program {{ $training['name'] }} juga menjadi salah satu
                    bentuk pemenuhan tanggung jawab terhadap keselamatan
                    karyawan, sekaligus mendukung kepatuhan terhadap standar
                    dan regulasi K3 yang berlaku secara nasional.
                </p>
                <p>
                    Untuk informasi lebih lanjut mengenai jadwal, materi, dan
                    persyaratan program {{ $training['name'] }}, silakan
                    menghubungi tim kami melalui tombol konsultasi yang
                    tersedia pada halaman ini.
                </p>
            </article>
        </div>
    </section>

    {{-- Training Details --}}
    <section class="training-details section-padding">
        <div class="container">
            <div class="training-details-grid">
                <div class="training-details-content">
                    <span class="section-badge">Detail Program</span>

                    <h2>Materi dan Pelaksanaan Pelatihan</h2>

                    <p>
                        Setiap program pelatihan dirancang untuk membantu
                        peserta memperoleh pengetahuan dan keterampilan
                        yang relevan dengan penerapan K3.
                    </p>

                    <div class="training-detail-block">
                        <h3>
                            <i class="bx bx-list-check"></i>
                            Materi Pelatihan
                        </h3>

                        <ul>
                            {{-- Ganti dengan materi resmi dari client --}}
                            <li>Materi dasar keselamatan dan kesehatan kerja</li>
                            <li>Identifikasi bahaya dan pengendalian risiko</li>
                            <li>Prosedur keselamatan di lingkungan kerja</li>
                            <li>Evaluasi dan penerapan kompetensi peserta</li>
                        </ul>
                    </div>

                    <div class="training-detail-block">
                        <h3>
                            <i class="bx bx-chalkboard"></i>
                            Metode Pelatihan
                        </h3>

                        <p>
                            {{-- Ganti dengan metode resmi dari client --}}
                            Metode pelatihan dapat mencakup penyampaian materi,
                            diskusi, studi kasus, praktik, dan evaluasi sesuai
                            kebutuhan program.
                        </p>
                    </div>
                </div>

                <aside class="training-summary-card">
                    <div class="training-summary-header">
                        <i class="bx bx-info-circle"></i>
                        <h3>Ringkasan Program</h3>
                    </div>

                    <div class="training-summary-item">
                        <span>
                            <i class="bx bx-time-five"></i>
                            Durasi
                        </span>
                        <strong>Menyesuaikan Program</strong>
                    </div>

                    <div class="training-summary-item">
                        <span>
                            <i class="bx bx-map"></i>
                            Metode
                        </span>
                        <strong>Online / Offline</strong>
                    </div>

                    <div class="training-summary-item">
                        <span>
                            <i class="bx bx-certification"></i>
                            Sertifikasi
                        </span>
                        <strong>Sesuai Ketentuan</strong>
                    </div>

                    <div class="training-summary-item">
                        <span>
                            <i class="bx bx-group"></i>
                            Peserta
                        </span>
                        <strong>Individu / Perusahaan</strong>
                    </div>

                    <a
                        href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin berkonsultasi mengenai Pelatihan '.$training['name'].'.') }}"
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
    <section class="training-cta section-padding">
        <div class="container">
            <div class="training-cta-content">
                <div>
                    <span class="section-badge">Butuh Informasi Lebih Lanjut?</span>

                    <h2>Siap Mengikuti Pelatihan K3?</h2>

                    <p>
                        Konsultasikan kebutuhan pelatihan Anda bersama
                        tim kami untuk mendapatkan informasi program,
                        jadwal, dan pendaftaran.
                    </p>
                </div>

                <a
                    href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi dan jadwal Pelatihan '.$training['name'].'.') }}"
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