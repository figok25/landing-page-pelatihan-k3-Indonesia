@vite ('resources/css/home/layanan.css')
@php
    $provinces = \App\Data\RegionCatalog::provinces();
@endphp
<section class="service-area-section">
    <div class="container service-area-container">
        <div class="service-area-header">
            <span class="service-area-eyebrow"> JANGKAUAN LAYANAN </span>
            <h2 class="service-area-title">
                Tersedia di Berbagai Kota Besar &
                <span>Kawasan Industri di Indonesia</span>
            </h2>
            <p class="service-area-description">Kami siap menyelenggarakan pelatihan in-house, sertifikasi personil, dan riksa uji kelayakan teknis langsung di lokasi perusahaan atau site project Anda.</p>
        </div>

        <div class="service-area-card">
            <div class="service-area-search">
                <i class="bx bx-search"></i>
                <input type="text" id="serviceAreaSearch" placeholder="Cari provinsi atau kota/kabupaten..." autocomplete="off" />
            </div>

            <div class="service-area-list" id="serviceAreaList">
                @foreach ($provinces as $province)
                    @php $cities = \App\Data\RegionCatalog::citiesByProvinceSlug($province['slug']); @endphp
                    <div class="service-province">
                        <h4 class="service-province-title">Provinsi {{ $province['name'] }}</h4>
                        <ul class="service-city-list">
                            @foreach ($cities as $city)
                                @php $kec = \App\Data\KecamatanCatalog::forCity($city['code']); @endphp
                                <li class="service-city-item">
                                    <a href="{{ route('region.city', ['kota' => $city['slug']]) }}" class="service-city-link">
                                        <i class="bx bx-map-pin"></i>
                                        <span title="{{ $city['name'] }}">{{ $city['type'] }} {{ $city['name'] }}</span>
                                    </a>
                                    @if ($kec)
                                        <span class="service-city-kecamatan" title="{{ $kec }}">{{ $kec }}</span>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>

            <div class="service-area-footer">
                <p>
                    <em>
                        * Klik pada kota untuk melihat artikel dan jadwal pelatihan khusus di wilayah tersebut.
                        <a href="https://wa.me/628118500177?text=Halo%20Pelatihan%20K3%20Indonesia%2C%20saya%20ingin%20bertanya%20mengenai%20jadwal%20dan%20biaya%20pelatihan%20K3.%20Mohon%20bantuannya%2C%20terima%20kasih." target="_blank" rel="noopener noreferrer">Hubungi kami</a>
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
        if (!searchInput || !provinces.length) return;
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
                    if (match) cityMatch = true;
                });
                province.classList.toggle('is-hidden', keyword && !provinceMatch && !cityMatch);
            });
        });
    });
</script>
