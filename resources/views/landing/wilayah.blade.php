<section class="sec sec-soft" id="wilayah">
    <div class="wrap">
        <div class="sec-head">
            <div>
                <span class="eyebrow">JANGKAUAN LAYANAN</span>
                <h2>Tersedia di <em>{{ $stats['total_provinces'] }} Provinsi</em>, {{ $stats['total_cities'] }} Kota/Kabupaten & Seluruh Kecamatan</h2>
                <p>Kami siap menyelenggarakan pelatihan in-house, sertifikasi personil, dan riksa uji kelayakan teknis langsung di lokasi perusahaan atau site project Anda.</p>
            </div>
            <label class="search"><i class="bx bx-search"></i><input type="search" data-filter placeholder="Cari provinsi, kota, atau kecamatan..." autocomplete="off" /></label>
        </div>

        <div class="pane" data-pane>
            <nav class="pane-nav" aria-label="Daftar provinsi">
                @foreach ($regionGroups as $p)
                    <button type="button" data-target="prov-{{ $p['slug'] }}" class="{{ $loop->first ? 'on' : '' }}">
                        <span class="t">{{ $p['name'] }}</span>
                        <span class="c">{{ count($p['cities']) }}</span>
                    </button>
                @endforeach
            </nav>

            <div class="pane-body" tabindex="0">
                @foreach ($regionGroups as $p)
                    <section class="grp" id="prov-{{ $p['slug'] }}" data-name="{{ strtolower($p['name']) }}">
                        <h3 class="grp-t"><i class="bx bx-map-alt"></i> Provinsi {{ $p['name'] }} <small>{{ count($p['cities']) }} kota/kab</small></h3>
                        <div class="items items-r">
                            @foreach ($p['cities'] as $c)
                                <div class="item city" data-text="{{ strtolower($c['name'].' '.$c['kecamatan']) }}">
                                    <h4><a href="{{ $c['url'] }}"><i class="bx bx-map-pin"></i> {{ $c['name'] }}</a></h4>
                                    @if ($c['kecamatan'])
                                        <p class="kec"><b>Kecamatan:</b> {{ $c['kecamatan'] }}</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endforeach
                <p class="empty" hidden>Wilayah tidak ditemukan.</p>
            </div>
        </div>

        <p class="note">* Klik nama kota untuk melihat artikel dan jadwal pelatihan di wilayah tersebut. <a href="https://wa.me/628118500177?text=Halo%20Pelatihan%20K3%20Indonesia%2C%20saya%20ingin%20bertanya%20mengenai%20jadwal%20dan%20biaya%20pelatihan%20K3.%20Mohon%20bantuannya%2C%20terima%20kasih." target="_blank" rel="noopener">Hubungi kami</a> jika wilayah Anda belum tercantum.</p>
    </div>
</section>
