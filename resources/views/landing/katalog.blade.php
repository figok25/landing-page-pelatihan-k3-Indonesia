@php
    $total = $stats['total_trainings'];
    $totalJasa = $stats['total_services'];
@endphp
<section class="sec" id="layanan">
    <div class="wrap">
        <div class="sec-head">
            <div>
                <span class="eyebrow">DIREKTORI LENGKAP</span>
                <h2>Katalog <em>{{ $total }}+ Pelatihan</em> & <em>{{ $totalJasa }} Jasa</em> K3</h2>
                <p>Seluruh layanan tampil di sini. Gulir di dalam panel, pilih kelompok di sisi kiri, atau ketik kata kunci untuk mencari.</p>
            </div>
            <label class="search"><i class="bx bx-search"></i><input type="search" data-filter placeholder="Cari pelatihan atau jasa..." autocomplete="off" /></label>
        </div>

        @include ('landing.pane-catalog')
    </div>
</section>
