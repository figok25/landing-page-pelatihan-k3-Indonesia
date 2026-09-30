@extends ('layouts.master')

@section ('title', 'Katalog Pelatihan K3')
@section ('description', 'Katalog lengkap program pelatihan K3: sertifikasi personil, operator alat berat, konstruksi, migas, lingkungan, dan lainnya.')

@section ('content')
    @php $total = collect($grouped)->sum(fn ($g) => count($g['items'])); @endphp

    @include ('landing.phero', [
        'crumbs' => ['Pelatihan' => null],
        'eyebrow' => 'PROGRAM PELATIHAN',
        'heading' => 'Katalog <em>Pelatihan K3</em>',
        'lead' => 'Temukan program pelatihan dan sertifikasi K3 sesuai kebutuhan personil, perusahaan, dan bidang industri Anda.',
        'side' => '<div class="big"><strong>'.$total.'+</strong><span>Program pelatihan & sertifikasi</span></div>',
    ])

    <section class="sec" data-flat>
        <div class="wrap">
            <div class="flat-bar">
                <label class="search"><i class="bx bx-search"></i><input type="search" data-filter placeholder="Cari pelatihan: Forklift, Ahli K3 Umum, Crane..." autocomplete="off" /></label>
                <nav class="chips" aria-label="Kelompok pelatihan">
                    @foreach ($grouped as $key => $group)
                        @if (count($group['items']) > 0)
                            <a href="#g-{{ $key }}" data-target="g-{{ $key }}">{{ $group['label'] }} <b>{{ count($group['items']) }}</b></a>
                        @endif
                    @endforeach
                </nav>
            </div>

            @foreach ($grouped as $key => $group)
                @if (count($group['items']) > 0)
                    <section class="fgrp" id="g-{{ $key }}">
                        <h2 class="fgrp-t"><i class="bx bx-book-open"></i> Pelatihan {{ $group['label'] }} <small>{{ count($group['items']) }} program</small></h2>
                        <div class="items items-3">
                            @foreach ($group['items'] as $training)
                                @php $c = \App\Data\TrainingContent::for($training['slug'], $training['name']); @endphp
                                <a class="item" href="{{ route('training.show', ['training' => $training['slug']]) }}" data-text="{{ strtolower($training['name']) }}">
                                    <em>{{ $c['badge'] }}</em>
                                    <h4>Pelatihan {{ $training['name'] }}</h4>
                                    <p>{{ $c['description'] }}</p>
                                    <span>Lihat detail program <i class="bx bx-right-arrow-alt"></i></span>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endif
            @endforeach
            <p class="empty" hidden>Tidak ada pelatihan yang cocok. <a href="https://wa.me/628118500177" target="_blank" rel="noopener">Tanyakan via WhatsApp</a>.</p>
        </div>
    </section>

    @include ('landing.cta-band', ['ctaTitle' => 'Belum menemukan program yang Anda cari?', 'ctaText' => 'Tim kami siap membantu menyusun program in-house dan sertifikasi sesuai kebutuhan perusahaan Anda.'])
@endsection
