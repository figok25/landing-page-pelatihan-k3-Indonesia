@vite ('resources/css/home/layanan.css')
<section class="service-area-section">
    <div class="container service-area-container">
        {{-- Header --}}
        <div class="service-area-header">
            <span class="service-area-eyebrow"> JANGKAUAN LAYANAN </span>

            <h2 class="service-area-title">
                Tersedia di Berbagai Kota Besar &
                <span>Kawasan Industri di Indonesia</span>
            </h2>

            <p class="service-area-description">Kami siap menyelenggarakan pelatihan in-house, sertifikasi personil, dan riksa uji kelayakan teknis langsung di lokasi perusahaan atau site project Anda.</p>
        </div>

        {{-- Location Card --}}
        <div class="service-area-card">
            {{-- Search --}}
            <div class="service-area-search">
                <i class="bx bx-search"></i>

                <input
                    type="text"
                    id="serviceAreaSearch"
                    placeholder="Cari provinsi atau kota/kabupaten..."
                    autocomplete="off" />
            </div>

            {{-- Location List --}}
            <div class="service-area-list" id="serviceAreaList">
                {{-- Provinsi Aceh --}}
                <div class="service-province">
                    <h4 class="service-province-title">Provinsi Aceh</h4>

                    <ul class="service-city-list">
                        <li class="service-city-item">
                            <a href="/kota/kabupaten-aceh-barat" class="service-city-link">
                                <i class="bx bx-map-pin"></i>
                                <span title="Kabupaten Aceh Barat"> Kabupaten Aceh Barat </span>
                            </a>
                        </li>

                        {{-- Kota/kabupaten lainnya --}}
                    </ul>
                </div>

                {{-- Provinsi Placeholder --}}
                <div class="service-province">
                    <h4 class="service-province-title">Provinsi Placeholder</h4>

                    <ul class="service-city-list">
                        <li class="service-city-item">
                            <a href="/kota/kabupaten-placeholder" class="service-city-link">
                                <i class="bx bx-map-pin"></i>
                                <span title="Kabupaten Placeholder"> Kabupaten Placeholder </span>
                            </a>
                        </li>

                        <li class="service-city-item">
                            <a href="/kota/kota-placeholder" class="service-city-link">
                                <i class="bx bx-map-pin"></i>
                                <span title="Kota Placeholder"> Kota Placeholder </span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Provinsi lainnya --}}
                {{-- Copy .service-province untuk setiap provinsi --}}
            </div>

            {{-- Footer Note --}}
            <div class="service-area-footer">
                <p>
                    <em>
                        * Klik pada kota untuk melihat artikel dan jadwal pelatihan khusus di wilayah tersebut.
                        <a
                            href="https://wa.me/628118500177?text=Halo%20Pelatihan%20K3%20Indonesia%2C%20saya%20ingin%20bertanya%20mengenai%20jadwal%20dan%20biaya%20pelatihan%20K3.%20Mohon%20bantuannya%2C%20terima%20kasih."
                            target="_blank"
                            rel="noopener noreferrer">
                            Hubungi kami
                        </a>
                        jika kota Anda belum tercantum.
                    </em>
                </p>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('serviceAreaSearch');
        const provinces = document.querySelectorAll('.service-province');

        if (!searchInput || !provinces.length) {
            return;
        }

        searchInput.addEventListener('input', () => {
            const keyword = searchInput.value.toLowerCase().trim();

            provinces.forEach((province) => {
                const provinceName = province.querySelector('.service-province-title')?.textContent.toLowerCase() || '';

                const cities = [...province.querySelectorAll('.service-city-link')];

                let provinceMatch = provinceName.includes(keyword);
                let cityMatch = false;

                cities.forEach((city) => {
                    const cityName = city.textContent.toLowerCase().trim();

                    const match = cityName.includes(keyword);

                    city.closest('.service-city-item').style.display = !keyword || match || provinceMatch ? '' : 'none';

                    if (match) {
                        cityMatch = true;
                    }
                });

                province.classList.toggle('is-hidden', keyword && !provinceMatch && !cityMatch);
            });
        });
    });
</script>
