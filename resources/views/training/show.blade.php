@extends('layouts.master')

@section('title', $article['meta']['meta_title'] ?? ('Pelatihan '.$training['name']))
@section('description', $article['meta']['meta_description'] ?? ('Informasi pelatihan '.$training['name'].'.'))

@vite('resources/css/pages/training-show.css')

@push('styles')
<style>
.training-article-body h2{margin:42px 0 18px;color:var(--primary-color);font-size:clamp(24px,3vw,34px);line-height:1.25}
.training-article-body h3{margin:28px 0 12px;color:var(--primary-color);font-size:21px;line-height:1.35}
.training-article-body h4{margin:22px 0 10px;color:var(--primary-color);font-size:18px}
.training-article-body ul,.training-article-body ol{margin:12px 0 24px;padding-left:26px;color:var(--text-secondary);line-height:1.85}
.training-article-body li{margin:6px 0}
.training-article-body blockquote{margin:22px 0;padding:18px 22px;border-left:4px solid var(--secondary-color);border-radius:10px;background:var(--bg-light);color:var(--text-secondary);line-height:1.8}
.training-article-body strong{color:var(--primary-color)}
.training-article-body code{padding:2px 6px;border-radius:6px;background:var(--bg-light);font-size:.92em}
.training-article-body hr{margin:38px 0;border:0;border-top:1px solid var(--border-color)}
.training-article-body a{color:var(--primary-color);font-weight:600;text-decoration:underline;text-underline-offset:3px}
.training-article-meta{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:14px;margin:30px 0 0;padding:20px;border:1px solid var(--border-color);border-radius:var(--radius-lg);background:var(--bg-color)}
.training-article-meta-item{padding:12px 14px;border-radius:10px;background:var(--bg-light)}
.training-article-meta-item span{display:block;margin-bottom:5px;color:var(--text-muted);font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:.4px}
.training-article-meta-item strong{display:block;color:var(--primary-color);line-height:1.6}
@media(max-width:576px){.training-article-meta{grid-template-columns:1fr}.training-article-body h2{margin-top:34px}.training-article-body h3{font-size:19px}}
</style>
@endpush

@section('content')
    @php
        $cityLabel = isset($city) ? ' '.$city['type'].' '.$city['name'] : '';
        $meta = $article['meta'];
    @endphp

    <section class="training-hero">
        <div class="container">
            <div class="training-breadcrumb">
                <a href="{{ url('/') }}">Beranda</a>
                <i class="bx bx-chevron-right"></i>
                <a href="{{ route('training.index') }}">Pelatihan</a>
                <i class="bx bx-chevron-right"></i>
                <span>{{ $training['name'] }}{{ $cityLabel }}</span>
            </div>

            <div class="training-hero-content">
                <div class="training-hero-text">
                    <div class="training-badge-row">
                        <span class="section-badge"><i class="bx bx-certification"></i> Program Pelatihan</span>
                        @isset($city)
                            <span class="section-badge badge-location"><i class="bx bx-map-pin"></i>{{ $city['type'] }} {{ $city['name'] }}</span>
                        @endisset
                        @isset($regions)
                            <div class="region-select-wrapper">
                                <i class="bx bx-map-pin"></i>
                                <select class="region-select" aria-label="Pilih Wilayah" onchange="if (this.value) { window.location.href = this.value; }">
                                    <option value="">Nasional (Semua Wilayah)</option>
                                    @foreach ($regions as $province)
                                        <optgroup label="{{ $province['name'] }}">
                                            @foreach ($province['cities'] as $regionCity)
                                                <option value="{{ route('training.location', ['training' => $training['slug'], 'kota' => $regionCity['slug']]) }}" @selected(isset($city) && $city['slug'] === $regionCity['slug'])>{{ $regionCity['type'] }} {{ $regionCity['name'] }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        @endisset
                    </div>

                    <h1>Pelatihan {{ $training['name'] }}{{ $cityLabel }}</h1>
                    <p>{{ $meta['meta_description'] ?? 'Informasi lengkap mengenai program pelatihan '.$training['name'].'.' }}</p>

                    <div class="training-hero-actions">
                        <a href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai Pelatihan '.$training['name'].'.') }}" target="_blank" rel="noopener" class="btn btn-primary">Konsultasi Sekarang <i class="bx bx-right-arrow-alt"></i></a>
                        <a href="#training-information" class="btn btn-outline">Lihat Informasi <i class="bx bx-chevron-down"></i></a>
                    </div>
                </div>

                <div class="training-hero-visual">
                    <div class="training-visual-icon"><i class="bx bx-book-bookmark"></i></div>
                    <span>Pelatihan Profesional</span>
                    <strong>{{ $training['name'] }}</strong>
                    <div class="training-visual-decoration decoration-one"></div>
                    <div class="training-visual-decoration decoration-two"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="training-information section-padding" id="training-information">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-badge">Informasi Program</span>
                <h2>{{ $meta['meta_title'] ?? ('Pelatihan '.$training['name']) }}</h2>
                <p>Ringkasan dari artikel dan metadata program yang menjadi sumber konten halaman ini.</p>
            </div>

            <div class="training-information-grid">
                <div class="training-info-card"><div class="training-info-icon"><i class="bx bx-book-open"></i></div><h3>Keyword Utama</h3><p>{{ $meta['keyword_utama'] ?? 'Pelatihan '.$training['name'] }}</p></div>
                <div class="training-info-card"><div class="training-info-icon"><i class="bx bx-user-check"></i></div><h3>Target Pembaca</h3><p>{{ $meta['target_pembaca'] ?? 'Peserta dan perusahaan yang berkaitan dengan topik.' }}</p></div>
                <div class="training-info-card"><div class="training-info-icon"><i class="bx bx-buildings"></i></div><h3>Industri</h3><p>{{ is_array($meta['industri'] ?? null) ? implode(', ', $meta['industri']) : ($meta['industri'] ?? 'Disesuaikan dengan kebutuhan.') }}</p></div>
                <div class="training-info-card"><div class="training-info-icon"><i class="bx bx-award"></i></div><h3>Dokumen</h3><p>Jenis sertifikat atau bukti kompetensi mengikuti program, skema, dan penyelenggara yang berlaku.</p></div>
            </div>
        </div>
    </section>

    <section class="training-article section-padding">
        <div class="container">
            @isset($city)
                @php
                    $otherCities = collect(\App\Data\RegionCatalog::citiesByProvinceSlug($city['province_slug']))->where('slug','!=',$city['slug'])->take(8);
                @endphp
                <div class="training-article-body">
                    <p><strong>Wilayah:</strong> {{ $training['name'] }} dapat ditawarkan untuk {{ $city['type'] }} {{ $city['name'] }} dan wilayah lain di {{ $city['province'] }}, dengan jadwal dan pelaksanaan mengikuti kebutuhan program.</p>
                    @if($otherCities->isNotEmpty())
                        <p>Contoh wilayah lain yang tersedia di provinsi ini: {{ $otherCities->map(fn($c) => $c['type'].' '.$c['name'])->implode(', ') }}.</p>
                    @endif
                </div>
            @endisset

            <article class="training-article-body">
                {!! $article['html'] !!}
            </article>

        </div>
    </section>

    <section class="training-cta section-padding">
        <div class="container">
            <div class="training-cta-content">
                <div><span class="section-badge">Butuh Informasi Lebih Lanjut?</span><h2>{{ $meta['cta'] ?? ('Konsultasikan Kebutuhan Pelatihan '.$training['name']) }}</h2><p>Hubungi tim kami untuk informasi program, jadwal, materi, persyaratan, dan kebutuhan perusahaan.</p></div>
                <a href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin berkonsultasi mengenai Pelatihan '.$training['name'].'.') }}" target="_blank" rel="noopener" class="btn btn-primary">Konsultasi Sekarang <i class="bx bx-right-arrow-alt"></i></a>
            </div>
        </div>
    </section>
@endsection
