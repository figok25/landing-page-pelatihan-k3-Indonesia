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

            <p class="footer-description">Solusi Pelatihan dan Jasa Keselamatan Kerja untuk Kompetensi yang Lebih Baik dan Masa Depan yang Lebih Aman.</p>

            <div class="footer-socials">
                <a href="#" aria-label="Instagram">
                    <i class="bx bxl-instagram"></i>
                </a>

                <a href="#" aria-label="Facebook">
                    <i class="bx bxl-facebook"></i>
                </a>

                <a href="#" aria-label="LinkedIn">
                    <i class="bx bxl-linkedin"></i>
                </a>

                <a href="https://wa.me/6281100000000" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                    <i class="bx bxl-whatsapp"></i>
                </a>
            </div>
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
                    <a href="{{ route('about') }}">
                        <i class="bx bx-chevron-right"></i>
                        Tentang Kami
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}">
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
        <div class="footer-column">
            <h3 class="footer-heading">Kontak Kami</h3>

            <ul class="footer-contact-list">
                <li>
                    <i class="bx bx-phone"></i>

                    <div>
                        <span>Telepon / WhatsApp</span>
                        <a href="https://wa.me/6281100000000" target="_blank" rel="noopener noreferrer">
                            +62 811-0000-000
                        </a>
                    </div>
                </li>

                <li>
                    <i class="bx bx-envelope"></i>

                    <div>
                        <span>Email</span>
                        <a href="mailto:info@pelatihank3indonesia.com"> info@pelatihank3indonesia.com </a>
                    </div>
                </li>

                <li>
                    <i class="bx bx-map"></i>

                    <div>
                        <span>Alamat</span>
                        <p>Jl. Pendidikan No. 123, Jakarta, Indonesia</p>
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
