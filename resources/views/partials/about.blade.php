@vite ('resources/css/home/about.css')
<section id="tentang" class="about-section">
    {{-- Background --}}
    <div class="about-bg">
        {{-- Replace with the actual site photo --}}
        <img
            src="{{ asset('images/about-bg.jpg') }}"
            alt="Instruktur K3 membimbing peserta pelatihan di lapangan"
            class="about-bg-image" />
        <div class="about-overlay"></div>
    </div>

    <div class="container about-container">
        <div class="about-grid">
            {{-- Left: Heading & Description --}}
            <div class="about-text">
                <span class="about-eyebrow"> KENAPA MEMILIH KAMI </span>

                <h1 class="about-title">Komitmen Kami untuk Keselamatan dan Masa Depan Anda</h1>

                <p class="about-intro">PelatihanK3 Indonesia berkomitmen untuk memberikan layanan terbaik dengan standar kualitas tinggi, didukung oleh tim profesional dan fasilitas pelatihan yang lengkap.</p>
            </div>

            {{-- Right: Feature Grid --}}
            <div class="about-features">
                <div class="about-feature">
                    <div class="about-feature-icon">
                        <i class="bx bx-user-voice"></i>
                    </div>

                    <div>
                        <h3>Tenaga Ahli Berpengalaman</h3>
                        <p>Instruktur tersertifikasi dan berkompeten di bidangnya.</p>
                    </div>
                </div>

                <div class="about-feature">
                    <div class="about-feature-icon">
                        <i class="bx bx-certification"></i>
                    </div>

                    <div>
                        <h3>Sertifikat Resmi</h3>
                        <p>Diakui oleh instansi terkait dan berstandar nasional.</p>
                    </div>
                </div>

                <div class="about-feature">
                    <div class="about-feature-icon">
                        <i class="bx bx-buildings"></i>
                    </div>

                    <div>
                        <h3>Fasilitas Lengkap</h3>
                        <p>Ruang kelas, alat praktik, dan metode pembelajaran modern.</p>
                    </div>
                </div>

                <div class="about-feature">
                    <div class="about-feature-icon">
                        <i class="bx bx-map"></i>
                    </div>

                    <div>
                        <h3>Layanan Seluruh Indonesia</h3>
                        <p>Hadir di berbagai provinsi, kabupaten/kota, dan kecamatan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
