<header class="navbar">
    <div class="container navbar-container">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="navbar-logo">
            <span class="navbar-logo-icon">
                <i class="bx bx-shield-quarter"></i>
            </span>

            <span class="navbar-logo-text">
                PelatihanK3
                <small>Indonesia</small>
            </span>
        </a>

        {{-- Desktop Navigation --}}
        <nav class="navbar-menu">
            <a href="{{ route('home') }}" class="navbar-link {{ request()->routeIs('home') ? 'active' : '' }}">
                Beranda
            </a>

            {{-- Pelatihan Dropdown --}}
            <div class="navbar-dropdown">
                <button type="button" class="navbar-link navbar-dropdown-toggle">
                    Pelatihan
                    <i class="bx bx-chevron-down"></i>
                </button>

                <div class="navbar-dropdown-menu">
                    <a href="{{ route('training.index') }}">
                        <i class="bx bx-book-open"></i>
                        Semua Pelatihan
                    </a>

                    <a href="{{ route('training.index') }}">
                        <i class="bx bx-certification"></i>
                        Program Sertifikasi
                    </a>
                </div>
            </div>

            {{-- Jasa Dropdown --}}
            <div class="navbar-dropdown">
                <button type="button" class="navbar-link navbar-dropdown-toggle">
                    Jasa
                    <i class="bx bx-chevron-down"></i>
                </button>

                <div class="navbar-dropdown-menu">
                    <a href="{{ route('service.index') }}">
                        <i class="bx bx-briefcase"></i>
                        Semua Jasa
                    </a>

                    <a href="{{ route('service.index') }}">
                        <i class="bx bx-shield-quarter"></i>
                        Konsultasi K3
                    </a>
                </div>
            </div>

            <a href="#tentang" class="navbar-link {{ request()->routeIs('about') ? 'active' : '' }}">
                Tentang Kami
            </a>

            <a href="#kontak" class="navbar-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                Kontak
            </a>
        </nav>

        {{-- Right Actions --}}
        <div class="navbar-actions">
            {{-- Search --}}
            <button type="button" class="navbar-search" aria-label="Cari">
                <i class="bx bx-search"></i>
            </button>

            {{-- WhatsApp --}}
            <a
                href="https://wa.me/628118500177?text=Halo%20Admin%2C%20saya%20ingin%20bertanya%20mengenai%20pelatihan%20K3."
                target="_blank"
                rel="noopener noreferrer"
                class="navbar-contact">
                <i class="bx bxl-whatsapp"></i>
                Hubungi Kami
            </a>

            {{-- Mobile Toggle --}}
            <button
                type="button"
                class="navbar-mobile-toggle"
                id="navbarMobileToggle"
                aria-label="Buka menu"
                aria-expanded="false"
                aria-controls="navbarMobileMenu">
                <i class="bx bx-menu"></i>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div class="navbar-mobile-menu" id="navbarMobileMenu">
        <a href="{{ route('home') }}" class="navbar-mobile-link"> Beranda </a>

        <details class="navbar-mobile-dropdown">
            <summary>
                Pelatihan
                <i class="bx bx-chevron-down"></i>
            </summary>

            <div>
                <a href="{{ route('training.index') }}"> Semua Pelatihan </a>

                <a href="{{ route('training.index') }}"> Program Sertifikasi </a>
            </div>
        </details>

        <details class="navbar-mobile-dropdown">
            <summary>
                Jasa
                <i class="bx bx-chevron-down"></i>
            </summary>

            <div>
                <a href="{{ route('service.index') }}"> Semua Jasa </a>

                <a href="{{ route('service.index') }}"> Konsultasi K3 </a>
            </div>
        </details>

        <a href="{{ route('home') }}#tentang" class="navbar-mobile-link"> Tentang Kami </a>

        <a href="{{ route('home') }}#kontak" class="navbar-mobile-link"> Kontak </a>

        <a
            href="https://wa.me/628118500177?text=Halo%20Admin%2C%20saya%20ingin%20bertanya%20mengenai%20pelatihan%20K3."
            target="_blank"
            rel="noopener noreferrer"
            class="navbar-mobile-contact">
            <i class="bx bxl-whatsapp"></i>
            Hubungi Kami
        </a>
    </div>
</header>
