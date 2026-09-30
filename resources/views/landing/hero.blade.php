@php $wa = 'https://wa.me/628118500177?text='; @endphp
<section class="hero">
    <div class="wrap hero-head">
        <span class="badge"><i></i> PUSAT PELATIHAN & JASA K3 TERPERCAYA</span>
        <h1>Satu Pintu untuk <em>Sertifikasi K3</em>, <em>Pelatihan Kompetensi</em>, dan <em>Jasa Riksa Uji</em> di Seluruh Indonesia</h1>
        <p>Dari identifikasi bahaya di lapangan hingga sertifikat yang diakui Kemnaker RI, BNSP, KLHK, dan Ditjen Migas — kami memetakan <strong>{{ $stats['total_trainings'] }}</strong> program pelatihan dan <strong>{{ $stats['total_services'] }}</strong> jenis jasa K3 ke dalam satu portal yang mudah ditelusuri, didampingi tenaga ahli bersertifikat nasional.</p>
        <div class="hero-act">
            <a href="#layanan" class="btn btn-y">Lihat Semua Program <i class="bx bx-down-arrow-alt"></i></a>
            <a href="{{ $wa }}{{ rawurlencode('Halo Admin, saya ingin bertanya mengenai pelatihan K3.') }}" target="_blank" rel="noopener" class="btn btn-o"><i class="bx bxl-whatsapp"></i> Hubungi Kami</a>
        </div>
    </div>

    <div class="wrap">
        <div class="hero-media">
            <img src="{{ asset('images/hero-1.jpg') }}" alt="Petugas K3 memeriksa area kilang industri" class="slide on" fetchpriority="high" />
            <img src="{{ asset('images/hero-2.jpg') }}" alt="Petugas K3 perempuan di area pabrik" class="slide" loading="lazy" />
            <div class="hero-shade"></div>

            <div class="hero-feats">
                <span><i class="bx bx-group"></i> Instruktur Profesional</span>
                <span><i class="bx bx-certification"></i> Sertifikat Resmi & Berlisensi</span>
                <span><i class="bx bx-book-open"></i> Materi Lengkap & Terbaru</span>
                <span><i class="bx bx-map"></i> Layanan Seluruh Indonesia</span>
            </div>

            <div class="hero-card">
                <div class="hero-card-top"><b>Status Operasional</b><span>Tahun {{ date('Y') }}/{{ date('Y') + 1 }}</span></div>
                <small>Pelatihan K3 Indonesia Authority</small>
                <h3>Sertifikasi Legal, Resmi & Terverifikasi</h3>
                <p>Seluruh SKP, Lisensi K3, dan Surat Tanda Lulus diuji langsung oleh Pengawas Ketenagakerjaan Kemnaker RI & Asesor Berlisensi BNSP.</p>
                <div class="hero-card-n"><strong>{{ $stats['total_trainings'] + $stats['total_services'] }}+</strong> Skema Sertifikasi</div>
            </div>

            <div class="dots" id="heroDots"><button class="on" aria-label="Foto 1"></button><button aria-label="Foto 2"></button></div>
        </div>

        <div class="stats">
            <div><i class="bx bx-award"></i><strong>{{ $stats['total_trainings'] }}+</strong><span>Program Pelatihan Aktif</span></div>
            <div><i class="bx bx-buildings"></i><strong>100%</strong><span>Regulasi Resmi Negara</span></div>
            <div><i class="bx bx-shield-quarter"></i><strong>99.4%</strong><span>Tingkat Kelulusan Uji</span></div>
            <div><i class="bx bx-group"></i><strong>12.000+</strong><span>Alumni Terdaftar TemanK3</span></div>
        </div>
    </div>
</section>
