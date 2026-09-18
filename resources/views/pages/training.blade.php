@extends ('layouts.master')

@section ('title', 'Katalog Pelatihan K3')

@section (
    'description',
    'Katalog lengkap program pelatihan K3: sertifikasi personil, operator alat berat, konstruksi, migas, lingkungan, dan lainnya.'
)
@vite ('resources/css/pages/training.css')
@section ('content')
    <section class="training-section">
        <div class="container training-container">
            {{-- Header --}}
            <div class="training-header">
                <span class="training-eyebrow"> PROGRAM PELATIHAN </span>

                <h1 class="training-title">
                    Katalog
                    <span>Pelatihan K3</span>
                </h1>

                <p class="training-description">Temukan program pelatihan dan sertifikasi K3 sesuai kebutuhan personil, perusahaan, dan bidang industri Anda.</p>
            </div>

            {{-- Training Groups --}}
            <div class="training-groups">
                @foreach ($grouped as $group)
                    @if (count($group['items']) > 0)
                        <div class="training-group">
                            {{-- Group Header --}}
                            <div class="training-group-header">
                                <div class="training-group-icon">
                                    <i class="bx bx-book-open"></i>
                                </div>

                                <div>
                                    <h2 class="training-group-title">{{ $group['label'] }}</h2>

                                    <p class="training-group-count">
                                        {{ count($group['items']) }} program pelatihan tersedia
                                    </p>
                                </div>
                            </div>

                            {{-- Training Cards --}}
                            <div class="training-grid">
                                @foreach ($group['items'] as $training)
                                    <a
                                        href="{{ route('training.show', ['training' => $training['slug']]) }}"
                                        class="training-card">
                                        <div class="training-card-content">
                                            <div class="training-card-top">
                                                <span class="training-card-badge"> PELATIHAN K3 </span>

                                                <i class="bx bx-right-arrow-alt training-card-arrow"></i>
                                            </div>

                                            <h3 class="training-card-title">{{ $training['name'] }}</h3>

                                            <p class="training-card-link">
                                                Lihat detail program
                                                <i class="bx bx-chevron-right"></i>
                                            </p>
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
