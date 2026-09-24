@extends ('layouts.master')

@section ('title', 'Katalog Jasa K3')

@section (
    'description',
    'Katalog jasa konsultasi dan perizinan K3: riksa uji alat, SLF, SLO, kajian teknis, dan pengelolaan limbah B3.'
)

@vite ('resources/css/pages/services.css')

@section ('content')
    <section class="services-section">
        <div class="container services-container">
            {{-- Header --}}
            <div class="services-header">
                <span class="services-eyebrow"> LAYANAN K3 </span>

                <h1 class="services-title">
                    Katalog
                    <span>Jasa K3</span>
                </h1>

                <p class="services-description">Temukan layanan konsultasi, pemeriksaan, pengujian, kajian teknis, dan perizinan K3 sesuai kebutuhan perusahaan dan proyek Anda.</p>
            </div>

            {{-- Service Categories --}}
            <div class="services-groups">
                @foreach ($categories as $key => $meta)
                    @php
                    $items = array_values(
                        array_filter(
                            $services,
                            fn ($service) => $service['category'] === $key
                        )
                    );
                @endphp

                    @if (count($items) > 0)
                        <div class="services-group">
                            {{-- Category Header --}}
                            <div class="services-group-header">
                                <div class="services-group-icon">
                                    <i class="bx bx-cog"></i>
                                </div>

                                <div>
                                    <h2 class="services-group-title">{{ $meta['label'] }}</h2>

                                    <p class="services-group-count">{{ count($items) }} layanan tersedia</p>
                                </div>
                            </div>

                            {{-- Service Cards --}}
                            <div class="services-grid">
                                @foreach ($items as $service)
                                    @php $serviceContent = \App\Data\ServiceContent::for($service['slug'], $service['name']); @endphp
                                    <a
                                        href="{{ route('service.show', ['service' => $service['slug']]) }}"
                                        class="service-card">
                                        <div class="service-card-content">
                                            <div class="service-card-top">
                                                <span class="service-card-badge"> {{ $serviceContent['badge'] }} </span>

                                                <div class="service-card-icon">
                                                    <i class="bx bx-right-arrow-alt"></i>
                                                </div>
                                            </div>

                                            <h3 class="service-card-title">{{ $service['name'] }}</h3>

                                            <div class="service-card-link">
                                                Lihat detail layanan
                                                <i class="bx bx-chevron-right"></i>
                                            </div>
                                        </div>
                                    </a>

                                @endforeach
                            </div>
                        </div>

                    @endif

                @endforeach
            </div>
        </div>
    </section>

@endsection
