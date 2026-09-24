<footer class="site-footer">
    {{-- Footer Main --}}
    <div class="container footer-container">
        {{-- Brand --}}
        <div class="footer-brand">
            <a href="{{ route('home') }}" class="footer-logo">
                <span class="footer-logo-icon">
                    <i class="bx bx-shield-quarter"></i>
                </span>

                <span class="footer-logo-text">
                    PelatihanK3
                    <small>Indonesia</small>
                </span>
            </a>

            <p class="footer-description">Lembaga Pembinaan Keselamatan dan Kesehatan Kerja (PJK3) terakreditasi resmi Kemnaker RI dan LSP Terlisensi BNSP. Menyelenggarakan sertifikasi kompetensi personil K3 industri, inspeksi riksa uji kelayakan teknis, dan audit SMK3 nasional.</p>
        </div>

        {{-- Navigation --}}
        <div class="footer-column">
            <h3 class="footer-heading">Navigasi</h3>

            <ul class="footer-links">
                <li>
                    <a href="{{ route('home') }}">
                        <i class="bx bx-chevron-right"></i>
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="{{ route('training.index') }}">
                        <i class="bx bx-chevron-right"></i>
                        Pelatihan
                    </a>
                </li>

                <li>
                    <a href="{{ route('service.index') }}">
                        <i class="bx bx-chevron-right"></i>
                        Jasa
                    </a>
                </li>

                <li>
                    <a href="{{ route('home') }}#tentang">
                        <i class="bx bx-chevron-right"></i>
                        Tentang Kami
                    </a>
                </li>

                <li>
                    <a href="{{ route('home') }}#kontak">
                        <i class="bx bx-chevron-right"></i>
                        Kontak
                    </a>
                </li>
            </ul>
        </div>

        {{-- Services --}}
        <div class="footer-column">
            <h3 class="footer-heading">Layanan</h3>

            <ul class="footer-links">
                <li>
                    <a href="{{ route('training.index') }}">
                        <i class="bx bx-chevron-right"></i>
                        Pelatihan K3
                    </a>
                </li>

                <li>
                    <a href="{{ route('service.index') }}">
                        <i class="bx bx-chevron-right"></i>
                        Jasa Konsultasi
                    </a>
                </li>

                <li>
                    <a href="{{ route('service.index') }}">
                        <i class="bx bx-chevron-right"></i>
                        Perizinan & Riksa Uji
                    </a>
                </li>

                <li>
                    <a href="{{ route('training.index') }}">
                        <i class="bx bx-chevron-right"></i>
                        Program Sertifikasi
                    </a>
                </li>
            </ul>
        </div>

        {{-- Contact --}}
        <section id="kontak">
            <div class="footer-column">
                <h3 class="footer-heading">Kontak Kami</h3>

                <ul class="footer-contact-list">
                    <li>
                        <i class="bx bx-map"></i>

                        <div>
                            <span>Alamat</span>
                            <span>
                                Jln. Raya Pondok Indah Sektor 3 Pondok Pinang, Jakarta Selatan
                            </span>
                        </div>
                    </li>

                    <li>
                        <i class="bx bx-phone"></i>

                        <div>
                            <span>Telepon / WhatsApp</span>
                            <a href="https://wa.me/628118500177" target="_blank" rel="noopener noreferrer">
                                0811-8500-177 (WA 24/7)
                            </a>
                        </div>
                    </li>

                    <li>
                        <i class="bx bx-envelope"></i>

                        <div>
                            <span>Email</span>
                            <a href="mailto:marketing@Pelatihank3offshore.com"> marketing@Pelatihank3offshore.com </a>
                        </div>
                    </li>
                </ul>
            </div>
    </div>

    {{-- Footer Bottom --}}
    <div class="footer-bottom">
        <div class="container footer-bottom-container">
            <p>&copy; {{ date('Y') }} PelatihanK3 Indonesia. All rights reserved.</p>

            <div class="footer-bottom-links">
                <a href="#">Kebijakan Privasi</a>
                <span>|</span>
                <a href="#">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>
