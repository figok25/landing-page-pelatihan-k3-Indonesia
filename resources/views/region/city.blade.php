@extends('layouts.master')

@section('title', 'Pelatihan & Jasa K3 di '.$city['name'])
@section('description', 'Layanan pelatihan dan jasa K3 di '.$city['type'].' '.$city['name'].', '.$city['province'].'.')

@section('content')
    @php
        $full = $city['type'].' '.$city['name'];
        $total = count($trainings) + count($services);
        $wa = 'https://wa.me/628118500177?text='.rawurlencode('Halo Admin, saya ingin bertanya mengenai pelatihan K3 di '.$city['name'].'.');
        $actions = '<a href="#katalog" class="btn btn-y">Lihat Pelatihan <i class="bx bx-down-arrow-alt"></i></a><a href="'.$wa.'" target="_blank" rel="noopener" class="btn btn-w"><i class="bx bxl-whatsapp"></i> Hubungi Kami</a>';
        $side = '<div class="side-card"><i class="bx bx-map-pin"></i><span>'.e($city['province']).'</span><strong>'.e($full).'</strong></div>';
    @endphp

    @include ('landing.phero', [
        'crumbs' => [$city['name'] => null],
        'eyebrow' => '<i class="bx bx-map-pin"></i> LAYANAN K3 INDONESIA',
        'heading' => 'Pelatihan & Jasa K3 <em>di '.e($full).'</em>',
        'lead' => 'Kami melayani kebutuhan pelatihan in-house, sertifikasi personil, dan riksa uji kelayakan teknis di '.$full.' dan sekitarnya.',
        'image' => 'hero-1.jpg', 'actions' => $actions, 'side' => $side,
    ])

    <section class="sec sec-tight">
        <div class="wrap">
            <div class="igrid igrid-3">
                <div class="icard"><i class="bx bx-book-open"></i><h3>Pelatihan K3</h3><p>Program pelatihan untuk meningkatkan kompetensi keselamatan kerja.</p></div>
                <div class="icard"><i class="bx bx-certification"></i><h3>Sertifikasi Personil</h3><p>Dukungan pengembangan kompetensi dan sertifikasi tenaga kerja.</p></div>
                <div class="icard"><i class="bx bx-shield-quarter"></i><h3>Riksa Uji Teknis</h3><p>Layanan terkait pemeriksaan dan pengujian teknis sesuai kebutuhan.</p></div>
            </div>
        </div>
    </section>

    <section class="sec sec-soft" id="katalog">
        <div class="wrap">
            <div class="sec-head">
                <div>
                    <span class="eyebrow">DIREKTORI LENGKAP</span>
                    <h2>Katalog <em>{{ count($trainings) }}+ Pelatihan</em> & <em>{{ count($services) }} Jasa</em> K3</h2>
                    <p>Tersedia Public Batch & In-House di {{ $full }}. Gulir di dalam panel atau ketik kata kunci untuk mencari.</p>
                </div>
                <label class="search"><i class="bx bx-search"></i><input type="search" data-filter placeholder="Cari: Forklift, Crane, Ahli K3 Umum, Riksa Uji..." autocomplete="off" /></label>
            </div>
            @include ('landing.pane-catalog')
        </div>
    </section>

    @if ($kecamatan)
        <section class="sec">
            <div class="wrap">
                <div class="cover">
                    <div class="cover-h">
                        <span class="eyebrow">AREA LAYANAN</span>
                        <h2>Cakupan Kecamatan</h2>
                        <p>{{ $full }}, {{ $city['province'] }}</p>
                    </div>
                    <ul class="tags">
                        @foreach (array_map('trim', explode(',', $kecamatan)) as $kec)
                            @if ($kec !== '')<li><i class="bx bx-map-pin"></i>{{ $kec }}</li>@endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    @endif

    @include ('landing.cta-band', [
        'ctaTitle' => 'Siap Meningkatkan Kompetensi K3 Anda?',
        'ctaText' => 'Konsultasikan kebutuhan pelatihan dan jasa K3 Anda bersama tim kami.',
        'ctaMsg' => 'Halo Admin, saya ingin bertanya mengenai pelatihan K3 di '.$city['name'].'.',
    ])
@endsection
