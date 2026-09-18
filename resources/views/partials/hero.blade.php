@vite ('resources/css/home/hero.css')
<section class="hero-section">
    {{-- Background Decoration --}}
    <div class="hero-bg hero-bg-green"></div>
    <div class="hero-bg hero-bg-navy"></div>

    <div class="container hero-container">
        {{-- Hero Content --}}
        <div class="hero-content">
            <span class="hero-badge">
                <span class="hero-badge-dot"></span>
                DIREKTORI NASIONAL KOMPETENSI TEKNIK & K3 TAHUN 2026
            </span>

            <h1 class="hero-title">
                Portal Resmi Informasi <span>Pelatihan</span>, <span>Sertifikasi Profesi K3</span>, dan
                <span>Jasa Riksa Uji Nasional</span>
            </h1>

            <p class="hero-description">Pusat rujukan regulasi Kemnaker RI, BNSP, KLHK, dan Ditjen Migas. Menjangkau lebih dari
            <strong>{{ $stats['total_trainings'] }}</strong>
            program pelatihan dan
            <strong>{{ $stats['total_services'] }}</strong>
            jenis jasa yang didukung oleh tenaga ahli berpengalaman dan berstandar nasional.</p>

            {{-- Hero Features --}}
            <div class="hero-features">
                <div class="hero-feature">
                    <div class="hero-feature-icon">
                        <i class="bx bx-group"></i>
                    </div>
                    <div>
                        <strong>Instruktur</strong>
                        <span>Profesional</span>
                    </div>
                </div>

                <div class="hero-feature">
                    <div class="hero-feature-icon">
                        <i class="bx bx-certification"></i>
                    </div>
                    <div>
                        <strong>Sertifikat</strong>
                        <span>Resmi & Berlisensi</span>
                    </div>
                </div>

                <div class="hero-feature">
                    <div class="hero-feature-icon">
                        <i class="bx bx-book-open"></i>
                    </div>
                    <div>
                        <strong>Materi</strong>
                        <span>Lengkap & Terbaru</span>
                    </div>
                </div>

                <div class="hero-feature">
                    <div class="hero-feature-icon">
                        <i class="bx bx-map"></i>
                    </div>
                    <div>
                        <strong>Layanan</strong>
                        <span>Seluruh Indonesia</span>
                    </div>
                </div>
            </div>

            {{-- Hero Buttons --}}
            <div class="hero-actions">
                <a href="{{ route('training.index') }}" class="btn btn-primary hero-btn">
                    Lihat Semua Program
                    <i class="bx bx-right-arrow-alt"></i>
                </a>

                <a href="{{ route('contact') }}" class="btn btn-outline-light hero-btn">
                    <i class="bx bx-phone"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>

        {{-- Hero Visual --}}
        <div class="hero-visual">
            <div class="hero-image-wrapper">
                {{-- Replace with your actual K3 image --}}
                <img src="{{ asset('storage/images/k3.jpg') }}" alt="Petugas keselamatan kerja K3" class="hero-image" />

                <div class="hero-image-overlay"></div>

                {{-- Floating Information Card --}}
                <div class="hero-floating-card">
                    <div class="hero-floating-icon">
                        <i class="bx bx-shield-quarter"></i>
                    </div>

                    <div>
                        <strong>Keselamatan Kerja</strong>
                        <span>Prioritas Utama Kami</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
