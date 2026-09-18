@extends ('layouts.master')

@section ('title', 'Pelatihan & Jasa K3 di '.$city['name'])
@section ('description', 'Layanan pelatihan dan jasa K3 di '.$city['type'].' '.$city['name'].', '.$city['province'].'.')

@section ('content')
    <section class="mx-auto max-w-4xl px-4 py-10">
        <h1 class="text-3xl font-bold text-slate-900">Pelatihan & Jasa K3 di {{ $city['type'] }} {{ $city['name'] }}</h1>
        <p class="mt-2 text-slate-600">{{ $city['province'] }}</p>

        <p class="mt-6 text-slate-600">
            Kami melayani kebutuhan pelatihan in-house, sertifikasi personil, dan riksa uji kelayakan teknis
            di {{ $city['type'] }} {{ $city['name'] }} dan sekitarnya.
        </p>

        @if ($kecamatan)
            <p class="mt-4 text-sm text-slate-400">Cakupan kecamatan: {{ $kecamatan }}</p>
        @endif

        <h2 class="mt-8 text-xl font-semibold text-slate-900">Pelatihan Populer</h2>
        <div class="mt-4 grid gap-3 sm:grid-cols-2">
            @foreach ($popularTrainings as $training)
                <a href="{{ route('training.show', ['training' => $training['slug']]) }}" class="rounded-lg border border-slate-100 bg-white p-4 shadow-sm hover:shadow-md">
                    {{ $training['name'] }}
                </a>
            @endforeach
        </div>

        <a href="https://wa.me/628118500177?text={{ urlencode('Halo Admin, saya ingin bertanya mengenai pelatihan K3 di '.$city['name'].'.') }}" target="_blank" rel="noopener" class="mt-8 inline-block rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white hover:bg-emerald-700">
            Konsultasi Sekarang →
        </a>
    </section>
@endsection
