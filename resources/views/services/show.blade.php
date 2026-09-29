@extends('layouts.master')

@section('title', $article['meta']['meta_title'] ?? $service['name'])
@section('description', $article['meta']['meta_description'] ?? ('Informasi jasa '.$service['name'].'.'))

@vite('resources/css/pages/service-show.css')

@push('styles')
<style>
.service-article-body h2{margin:42px 0 18px;color:var(--primary-color);font-size:clamp(24px,3vw,34px);line-height:1.25}
.service-article-body h3{margin:28px 0 12px;color:var(--primary-color);font-size:21px;line-height:1.35}
.service-article-body h4{margin:22px 0 10px;color:var(--primary-color);font-size:18px}
.service-article-body ul,.service-article-body ol{margin:12px 0 24px;padding-left:26px;color:var(--text-secondary);line-height:1.85}
.service-article-body li{margin:6px 0}
.service-article-body blockquote{margin:22px 0;padding:18px 22px;border-left:4px solid var(--secondary-color);border-radius:10px;background:var(--bg-light);color:var(--text-secondary);line-height:1.8}
.service-article-body strong{color:var(--primary-color)}
.service-article-body code{padding:2px 6px;border-radius:6px;background:var(--bg-light);font-size:.92em}
.service-article-body hr{margin:38px 0;border:0;border-top:1px solid var(--border-color)}
.service-article-body a{color:var(--primary-color);font-weight:600;text-decoration:underline;text-underline-offset:3px}
.service-article-meta{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:14px;margin:30px 0 0;padding:20px;border:1px solid var(--border-color);border-radius:var(--radius-lg);background:var(--bg-color)}
.service-article-meta-item{padding:12px 14px;border-radius:10px;background:var(--bg-light)}
.service-article-meta-item span{display:block;margin-bottom:5px;color:var(--text-muted);font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:.4px}
.service-article-meta-item strong{display:block;color:var(--primary-color);line-height:1.6}
@media(max-width:576px){.service-article-meta{grid-template-columns:1fr}.service-article-body h2{margin-top:34px}.service-article-body h3{font-size:19px}}
</style>
@endpush

@section('content')
    @php $cityLabel = isset($city) ? ' '.$city['type'].' '.$city['name'] : ''; $meta = $article['meta']; @endphp

    <section class="service-hero">
        <div class="container">
            <div class="service-breadcrumb"><a href="{{ url('/') }}">Beranda</a><i class="bx bx-chevron-right"></i><a href="{{ route('service.index') }}">Jasa</a><i class="bx bx-chevron-right"></i><span>{{ $service['name'] }}{{ $cityLabel }}</span></div>
            <div class="service-hero-content">
                <div class="service-hero-text">
                    <div class="training-badge-row">
                        <span class="section-badge"><i class="bx bx-briefcase-alt-2"></i> Jasa Profesional</span>
                        @isset($city)<span class="section-badge badge-location"><i class="bx bx-map-pin"></i>{{ $city['type'] }} {{ $city['name'] }}</span>@endisset
                        @isset($regions)
                            <div class="region-select-wrapper"><i class="bx bx-map-pin"></i><select class="region-select" aria-label="Pilih Wilayah" onchange="if (this.value) { window.location.href = this.value; }"><option value="">Nasional (Semua Wilayah)</option>@foreach($regions as $province)<optgroup label="{{ $province['name'] }}">@foreach($province['cities'] as $regionCity)<option value="{{ route('service.location',['service'=>$service['slug'],'kota'=>$regionCity['slug']]) }}" @selected(isset($city) && $city['slug']===$regionCity['slug'])>{{ $regionCity['type'] }} {{ $regionCity['name'] }}</option>@endforeach</optgroup>@endforeach</select></div>
                        @endisset
                    </div>
                    <h1>{{ $service['name'] }}{{ $cityLabel }}</h1>
                    <p>{{ $meta['meta_description'] ?? 'Informasi lengkap mengenai layanan '.$service['name'].'.' }}</p>
                    <div class="service-hero-actions"><a href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai '.$service['name'].'.') }}" target="_blank" rel="noopener" class="btn btn-primary">Konsultasi Sekarang <i class="bx bx-right-arrow-alt"></i></a><a href="#service-information" class="btn btn-outline">Lihat Informasi <i class="bx bx-chevron-down"></i></a></div>
                </div>
                <div class="service-hero-visual"><div class="service-visual-icon"><i class="bx bx-shield-quarter"></i></div><span>Layanan Profesional</span><strong>{{ $service['name'] }}</strong><div class="service-visual-decoration decoration-one"></div><div class="service-visual-decoration decoration-two"></div></div>
            </div>
        </div>
    </section>

    <section class="service-information section-padding" id="service-information">
        <div class="container">
            <div class="section-heading text-center"><span class="section-badge">Informasi Layanan</span><h2>{{ $meta['meta_title'] ?? $service['name'] }}</h2><p>Ringkasan dari artikel dan metadata layanan yang menjadi sumber konten halaman ini.</p></div>
            <div class="service-information-grid">
                <div class="service-info-card"><div class="service-info-icon"><i class="bx bx-book-open"></i></div><h3>Keyword Utama</h3><p>{{ $meta['keyword_utama'] ?? $service['name'] }}</p></div>
                <div class="service-info-card"><div class="service-info-icon"><i class="bx bx-user-check"></i></div><h3>Target Pengguna</h3><p>{{ $meta['target_pembaca'] ?? 'Perusahaan, organisasi, atau pihak yang membutuhkan layanan terkait.' }}</p></div>
                <div class="service-info-card"><div class="service-info-icon"><i class="bx bx-buildings"></i></div><h3>Industri</h3><p>{{ is_array($meta['industri'] ?? null) ? implode(', ', $meta['industri']) : ($meta['industri'] ?? 'Disesuaikan dengan kebutuhan.') }}</p></div>
                <div class="service-info-card"><div class="service-info-icon"><i class="bx bx-file"></i></div><h3>Output</h3><p>Dokumen, kajian, pendampingan, atau keluaran lain mengikuti ruang lingkup layanan dan kesepakatan pekerjaan.</p></div>
            </div>
        </div>
    </section>

    <section class="service-article section-padding">
        <div class="container">
            @isset($city)
                @php $otherCities=collect(\App\Data\RegionCatalog::citiesByProvinceSlug($city['province_slug']))->where('slug','!=',$city['slug'])->take(8); @endphp
                <div class="service-article-body"><p><strong>Wilayah:</strong> {{ $service['name'] }} dapat ditawarkan untuk {{ $city['type'] }} {{ $city['name'] }} dan wilayah lain di {{ $city['province'] }}, dengan ruang lingkup mengikuti kebutuhan layanan.</p>@if($otherCities->isNotEmpty())<p>Contoh wilayah lain yang tersedia di provinsi ini: {{ $otherCities->map(fn($c) => $c['type'].' '.$c['name'])->implode(', ') }}.</p>@endif</div>
            @endisset

            <article class="service-article-body">{!! $article['html'] !!}</article>

            <div class="service-article-meta"><div class="service-article-meta-item"><span>Slug</span><strong>{{ $meta['slug'] ?? $service['slug'] }}</strong></div><div class="service-article-meta-item"><span>Status konten</span><strong>{{ $meta['status'] ?? 'final' }}</strong></div><div class="service-article-meta-item"><span>Meta title</span><strong>{{ $meta['meta_title'] ?? $service['name'] }}</strong></div><div class="service-article-meta-item"><span>CTA</span><strong>{{ $meta['cta'] ?? 'Konsultasikan kebutuhan layanan' }}</strong></div></div>
        </div>
    </section>

    <section class="service-cta section-padding"><div class="container"><div class="service-cta-content"><div><span class="section-badge">Butuh Informasi Lebih Lanjut?</span><h2>{{ $meta['cta'] ?? ('Konsultasikan Kebutuhan '.$service['name']) }}</h2><p>Hubungi tim kami untuk informasi ruang lingkup, dokumen, jadwal, dan proses layanan.</p></div><a href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin berkonsultasi mengenai '.$service['name'].'.') }}" target="_blank" rel="noopener" class="btn btn-primary">Konsultasi Sekarang <i class="bx bx-right-arrow-alt"></i></a></div></div></section>
@endsection
