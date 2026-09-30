@extends ('layouts.master')

@section ('title', 'Katalog Jasa K3')
@section ('description', 'Katalog jasa konsultasi dan perizinan K3: riksa uji alat, SLF, SLO, kajian teknis, dan pengelolaan limbah B3.')

@section ('content')
    @php $total = count($services); @endphp

    @include ('landing.phero', [
        'crumbs' => ['Jasa' => null],
        'eyebrow' => 'LAYANAN K3',
        'heading' => 'Katalog <em>Jasa K3</em>',
        'lead' => 'Temukan layanan konsultasi, pemeriksaan, pengujian, kajian teknis, dan perizinan K3 sesuai kebutuhan perusahaan dan proyek Anda.',
        'image' => 'hero-1.jpg',
        'side' => '<div class="big"><strong>'.$total.'</strong><span>Jenis jasa K3 profesional</span></div>',
    ])

    <section class="sec" data-flat>
        <div class="wrap">
            <div class="flat-bar">
                <label class="search"><i class="bx bx-search"></i><input type="search" data-filter placeholder="Cari jasa: Riksa Uji, SLO, SLF, Limbah B3..." autocomplete="off" /></label>
                <nav class="chips" aria-label="Kelompok jasa">
                    @foreach ($categories as $key => $meta)
                        @php $n = count(array_filter($services, fn ($s) => $s['category'] === $key)); @endphp
                        @if ($n > 0)
                            <a href="#g-{{ $key }}" data-target="g-{{ $key }}">{{ $meta['label'] }} <b>{{ $n }}</b></a>
                        @endif
                    @endforeach
                </nav>
            </div>

            @foreach ($categories as $key => $meta)
                @php $items = array_values(array_filter($services, fn ($s) => $s['category'] === $key)); @endphp
                @if (count($items) > 0)
                    <section class="fgrp" id="g-{{ $key }}">
                        <h2 class="fgrp-t"><i class="bx bx-cog"></i> {{ $meta['label'] }} <small>{{ count($items) }} layanan</small></h2>
                        <div class="items items-3">
                            @foreach ($items as $service)
                                @php $c = \App\Data\ServiceContent::for($service['slug'], $service['name']); @endphp
                                <a class="item" href="{{ route('service.show', ['service' => $service['slug']]) }}" data-text="{{ strtolower($service['name']) }}">
                                    <em>{{ $c['badge'] }}</em>
                                    <h4>{{ $service['name'] }}</h4>
                                    <p>{{ $c['description'] }}</p>
                                    <span>Lihat detail layanan <i class="bx bx-right-arrow-alt"></i></span>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endif
            @endforeach
            <p class="empty" hidden>Tidak ada jasa yang cocok. <a href="https://wa.me/628118500177" target="_blank" rel="noopener">Tanyakan via WhatsApp</a>.</p>
        </div>
    </section>

    @include ('landing.cta-band', ['ctaTitle' => 'Butuh layanan yang belum tercantum?', 'ctaText' => 'Konsultasikan kebutuhan riksa uji, perizinan, dan kajian teknis perusahaan Anda bersama tim kami.'])
@endsection
