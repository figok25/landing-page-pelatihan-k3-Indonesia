<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield ('title', 'Pelatihan K3 Indonesia | Pelatihan & Jasa K3')</title>
    <meta name="description" content="@yield ('description', 'Pusat pelatihan dan jasa K3 di seluruh Indonesia.')" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#0f4d3a" />

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any" />
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" sizes="180x180" />
    <link rel="manifest" href="{{ asset('site.webmanifest') }}" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield ('title')" />
    <meta property="og:description" content="@yield ('description')" />
    <meta property="og:url" content="{{ url()->current() }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="{{ asset('css/landing.css') }}?v=1" rel="stylesheet" />
</head>
<body>
    @php $wa = 'https://wa.me/628118500177?text='; @endphp

    <div class="topbar">
        <div class="wrap topbar-in">
            <span><b>PORTAL INDUK</b> &nbsp;Regulasi: Kemnaker RI • BNSP • Ditjen Migas • KLHK</span>
            <span class="topbar-r"><i class="bx bx-medal"></i> Akreditasi PJK3 No. KEP.562/2022 &nbsp;•&nbsp; {{ $stats['total_trainings'] ?? '109' }}+ Program Aktif</span>
        </div>
    </div>

    <header class="nav" id="top">
        <div class="wrap nav-in">
            <a href="{{ route('home') }}" class="logo">
                <span class="logo-i"><i class="bx bx-shield-quarter"></i></span>
                <span class="logo-t">PelatihanK3<small>Indonesia</small></span>
            </a>

            <nav class="menu" id="menu">
                <a href="{{ route('home') }}">Beranda</a>
                <div class="dd">
                    <button type="button">Pelatihan <i class="bx bx-chevron-down"></i></button>
                    <div class="dd-m">
                        <a href="{{ route('training.index') }}"><i class="bx bx-book-open"></i> Semua Pelatihan</a>
                        <a href="{{ route('training.index') }}"><i class="bx bx-certification"></i> Program Sertifikasi</a>
                    </div>
                </div>
                <div class="dd">
                    <button type="button">Jasa <i class="bx bx-chevron-down"></i></button>
                    <div class="dd-m">
                        <a href="{{ route('service.index') }}"><i class="bx bx-briefcase"></i> Semua Jasa</a>
                        <a href="{{ route('service.index') }}"><i class="bx bx-shield-quarter"></i> Konsultasi K3</a>
                    </div>
                </div>
                <a href="#tentang">Tentang Kami</a>
                <a href="#kontak">Kontak</a>
                <a class="btn btn-y menu-wa" href="{{ $wa }}{{ rawurlencode('Halo Admin, saya ingin bertanya mengenai pelatihan K3.') }}" target="_blank" rel="noopener"><i class="bx bxl-whatsapp"></i> Hubungi Kami</a>
            </nav>

            <button class="burger" id="burger" aria-label="Buka menu" aria-expanded="false"><i class="bx bx-menu"></i></button>
        </div>
    </header>

    <main>@yield ('content')</main>

    <footer class="foot" id="kontak">
        <div class="wrap foot-grid">
            <div>
                <a href="{{ route('home') }}" class="logo logo-l">
                    <span class="logo-i"><i class="bx bx-shield-quarter"></i></span>
                    <span class="logo-t">PelatihanK3<small>Indonesia</small></span>
                </a>
                <p class="foot-desc">Lembaga Pembinaan Keselamatan dan Kesehatan Kerja (PJK3) terakreditasi resmi Kemnaker RI dan LSP Terlisensi BNSP. Menyelenggarakan sertifikasi kompetensi personil K3 industri, inspeksi riksa uji kelayakan teknis, dan audit SMK3 nasional.</p>
            </div>
            <div>
                <h3>Navigasi</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('training.index') }}">Pelatihan</a></li>
                    <li><a href="{{ route('service.index') }}">Jasa</a></li>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h3>Layanan</h3>
                <ul>
                    <li><a href="{{ route('training.index') }}">Pelatihan K3</a></li>
                    <li><a href="{{ route('service.index') }}">Jasa Konsultasi</a></li>
                    <li><a href="{{ route('service.index') }}">Perizinan & Riksa Uji</a></li>
                    <li><a href="{{ route('training.index') }}">Program Sertifikasi</a></li>
                </ul>
            </div>
            <div>
                <h3>Kontak Kami</h3>
                <ul class="foot-c">
                    <li><i class="bx bx-map"></i><span>Jln. Raya Pondok Indah Sektor 3 Pondok Pinang, Jakarta Selatan</span></li>
                    <li><i class="bx bx-phone"></i><a href="https://wa.me/628118500177" target="_blank" rel="noopener">0811-8500-177 (WA 24/7)</a></li>
                    <li><i class="bx bx-envelope"></i><a href="mailto:marketing@Pelatihank3offshore.com">marketing@Pelatihank3offshore.com</a></li>
                </ul>
            </div>
        </div>
        <div class="foot-b">
            <div class="wrap foot-b-in">
                <p>&copy; {{ date('Y') }} PelatihanK3 Indonesia. All rights reserved.</p>
                <p><a href="#">Kebijakan Privasi</a> &nbsp;|&nbsp; <a href="#">Syarat & Ketentuan</a></p>
            </div>
        </div>
    </footer>

    <a class="wa-float" href="{{ $wa }}{{ rawurlencode('Halo Admin, saya ingin mendapatkan informasi mengenai pelatihan K3.') }}" target="_blank" rel="noopener" aria-label="Hubungi Admin melalui WhatsApp"><i class="bx bxl-whatsapp"></i></a>

    <script src="{{ asset('js/landing.js') }}?v=1" defer></script>
</body>
</html>
