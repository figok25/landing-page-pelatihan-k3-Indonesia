@extends('layouts.master')

@section('title', $article['meta']['meta_title'] ?? $service['name'])
@section('description', $article['meta']['meta_description'] ?? ('Informasi jasa '.$service['name'].'.'))

@section('content')
    @php
        $cityLabel = isset($city) ? ' '.$city['type'].' '.$city['name'] : '';
        $meta = $article['meta'];
        $tags = '';
        if (isset($city)) { $tags .= '<span class="eyebrow eyebrow-w"><i class="bx bx-map-pin"></i> '.e($city['type'].' '.$city['name']).'</span>'; }
        $wa = 'https://wa.me/628118500177?text='.rawurlencode('Halo Admin, saya ingin mendapatkan informasi mengenai '.$service['name'].'.');
        $actions = '<a href="'.$wa.'" target="_blank" rel="noopener" class="btn btn-y">Konsultasi Sekarang <i class="bx bx-right-arrow-alt"></i></a><a href="#info" class="btn btn-w">Lihat Informasi <i class="bx bx-chevron-down"></i></a>';
        $side = '<div class="side-card"><i class="bx bx-shield-quarter"></i><span>Layanan Profesional</span><strong>'.e($service['name']).'</strong></div>';
    @endphp

    @include ('landing.phero', [
        'crumbs' => ['Jasa' => route('service.index'), ($service['name'].$cityLabel) => null],
        'eyebrow' => '<i class="bx bx-briefcase-alt-2"></i> JASA PROFESIONAL',
        'heading' => e($service['name'].$cityLabel),
        'lead' => $meta['meta_description'] ?? ('Informasi lengkap mengenai layanan '.$service['name'].'.'),
        'image' => 'hero-1.jpg',
        'tags' => $tags, 'actions' => $actions, 'side' => $side,
    ])

    @isset($regions)
        <div class="regionbar">
            <div class="wrap">
                <label class="region-select-wrapper"><i class="bx bx-map-pin"></i>
                    <select class="region-select" aria-label="Pilih Wilayah" onchange="if (this.value) { window.location.href = this.value; }">
                        <option value="{{ route('service.show', ['service' => $service['slug']]) }}">Nasional (Semua Wilayah)</option>
                        @foreach ($regions as $province)
                            <optgroup label="{{ $province['name'] }}">
                                @foreach ($province['cities'] as $regionCity)
                                    <option value="{{ route('service.location', ['service' => $service['slug'], 'kota' => $regionCity['slug']]) }}" @selected(isset($city) && $city['slug'] === $regionCity['slug'])>{{ $regionCity['type'] }} {{ $regionCity['name'] }}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </label>
                <span class="regionbar-t">Pilih wilayah pelaksanaan layanan</span>
            </div>
        </div>
    @endisset

    <section class="sec sec-tight" id="info">
        <div class="wrap">
            <div class="igrid">
                <div class="icard"><i class="bx bx-book-open"></i><h3>Keyword Utama</h3><p>{{ $meta['keyword_utama'] ?? $service['name'] }}</p></div>
                <div class="icard"><i class="bx bx-user-check"></i><h3>Target Pengguna</h3><p>{{ $meta['target_pembaca'] ?? 'Perusahaan, organisasi, atau pihak yang membutuhkan layanan terkait.' }}</p></div>
                <div class="icard"><i class="bx bx-buildings"></i><h3>Industri</h3><p>{{ is_array($meta['industri'] ?? null) ? implode(', ', $meta['industri']) : ($meta['industri'] ?? 'Disesuaikan dengan kebutuhan.') }}</p></div>
                <div class="icard"><i class="bx bx-file"></i><h3>Output</h3><p>Dokumen, kajian, pendampingan, atau keluaran lain mengikuti ruang lingkup layanan dan kesepakatan pekerjaan.</p></div>
            </div>
        </div>
    </section>

    <section class="sec sec-tight">
        <div class="wrap">
            <div class="doc">
                @isset($city)
                    @php $otherCities = collect(\App\Data\RegionCatalog::citiesByProvinceSlug($city['province_slug']))->where('slug','!=',$city['slug'])->take(8); @endphp
                    <div class="prose prose-note">
                        <p><strong>Wilayah:</strong> {{ $service['name'] }} dapat ditawarkan untuk {{ $city['type'] }} {{ $city['name'] }} dan wilayah lain di {{ $city['province'] }}, dengan ruang lingkup mengikuti kebutuhan layanan.</p>
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
        'ctaTitle' => $meta['cta'] ?? ('Konsultasikan Kebutuhan '.$service['name']),
        'ctaText' => 'Hubungi tim kami untuk informasi ruang lingkup, dokumen, jadwal, dan proses layanan.',
        'ctaMsg' => 'Halo Admin, saya ingin berkonsultasi mengenai '.$service['name'].'.',
    ])
@endsection
