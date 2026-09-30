@extends('layouts.master')

@section('title', $article['meta']['meta_title'] ?? ('Pelatihan '.$training['name']))
@section('description', $article['meta']['meta_description'] ?? ('Informasi pelatihan '.$training['name'].'.'))

@section('content')
    @php
        $cityLabel = isset($city) ? ' '.$city['type'].' '.$city['name'] : '';
        $meta = $article['meta'];
        $tags = '';
        if (isset($city)) { $tags .= '<span class="eyebrow eyebrow-w"><i class="bx bx-map-pin"></i> '.e($city['type'].' '.$city['name']).'</span>'; }
        $wa = 'https://wa.me/628118500177?text='.rawurlencode('Halo Admin, saya ingin mendapatkan informasi mengenai Pelatihan '.$training['name'].'.');
        $actions = '<a href="'.$wa.'" target="_blank" rel="noopener" class="btn btn-y">Konsultasi Sekarang <i class="bx bx-right-arrow-alt"></i></a><a href="#info" class="btn btn-w">Lihat Informasi <i class="bx bx-chevron-down"></i></a>';
        $side = '<div class="side-card"><i class="bx bx-book-bookmark"></i><span>Pelatihan Profesional</span><strong>'.e($training['name']).'</strong></div>';
    @endphp

    @include ('landing.phero', [
        'crumbs' => ['Pelatihan' => route('training.index'), ($training['name'].$cityLabel) => null],
        'eyebrow' => '<i class="bx bx-certification"></i> PROGRAM PELATIHAN',
        'heading' => e('Pelatihan '.$training['name'].$cityLabel),
        'lead' => $meta['meta_description'] ?? ('Informasi lengkap mengenai program pelatihan '.$training['name'].'.'),
        'tags' => $tags, 'actions' => $actions, 'side' => $side,
    ])

    @isset($regions)
        <div class="regionbar">
            <div class="wrap">
                <label class="region-select-wrapper"><i class="bx bx-map-pin"></i>
                    <select class="region-select" aria-label="Pilih Wilayah" onchange="if (this.value) { window.location.href = this.value; }">
                        <option value="{{ route('training.show', ['training' => $training['slug']]) }}">Nasional (Semua Wilayah)</option>
                        @foreach ($regions as $province)
                            <optgroup label="{{ $province['name'] }}">
                                @foreach ($province['cities'] as $regionCity)
                                    <option value="{{ route('training.location', ['training' => $training['slug'], 'kota' => $regionCity['slug']]) }}" @selected(isset($city) && $city['slug'] === $regionCity['slug'])>{{ $regionCity['type'] }} {{ $regionCity['name'] }}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </label>
                <span class="regionbar-t">Pilih wilayah pelaksanaan pelatihan</span>
            </div>
        </div>
    @endisset

    <section class="sec sec-tight" id="info">
        <div class="wrap">
            <div class="igrid">
                <div class="icard"><i class="bx bx-book-open"></i><h3>Keyword Utama</h3><p>{{ $meta['keyword_utama'] ?? 'Pelatihan '.$training['name'] }}</p></div>
                <div class="icard"><i class="bx bx-user-check"></i><h3>Target Pembaca</h3><p>{{ $meta['target_pembaca'] ?? 'Peserta dan perusahaan yang berkaitan dengan topik.' }}</p></div>
                <div class="icard"><i class="bx bx-buildings"></i><h3>Industri</h3><p>{{ is_array($meta['industri'] ?? null) ? implode(', ', $meta['industri']) : ($meta['industri'] ?? 'Disesuaikan dengan kebutuhan.') }}</p></div>
                <div class="icard"><i class="bx bx-award"></i><h3>Dokumen</h3><p>Jenis sertifikat atau bukti kompetensi mengikuti program, skema, dan penyelenggara yang berlaku.</p></div>
            </div>
        </div>
    </section>

    <section class="sec sec-tight">
        <div class="wrap">
            <div class="doc">
                @isset($city)
                    @php $otherCities = collect(\App\Data\RegionCatalog::citiesByProvinceSlug($city['province_slug']))->where('slug','!=',$city['slug'])->take(8); @endphp
                    <div class="prose prose-note">
                        <p><strong>Wilayah:</strong> {{ $training['name'] }} dapat ditawarkan untuk {{ $city['type'] }} {{ $city['name'] }} dan wilayah lain di {{ $city['province'] }}, dengan jadwal dan pelaksanaan mengikuti kebutuhan program.</p>
                        @if($otherCities->isNotEmpty())
                            <p>Contoh wilayah lain yang tersedia di provinsi ini: {{ $otherCities->map(fn($c) => $c['type'].' '.$c['name'])->implode(', ') }}.</p>
                        @endif
                    </div>
                @endisset
                <article class="prose">{!! $article['html'] !!}</article>
            </div>
        </div>
    </section>

    @include ('landing.cta-band', [
        'ctaTitle' => $meta['cta'] ?? ('Konsultasikan Kebutuhan Pelatihan '.$training['name']),
        'ctaText' => 'Hubungi tim kami untuk informasi program, jadwal, materi, persyaratan, dan kebutuhan perusahaan.',
        'ctaMsg' => 'Halo Admin, saya ingin berkonsultasi mengenai Pelatihan '.$training['name'].'.',
    ])
@endsection
