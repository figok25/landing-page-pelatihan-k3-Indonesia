@extends ('layouts.master')

@section ('title', $service['name'].' di '.$city['name'])
@section ('description', 'Informasi '.$service['name'].' di '.$city['name'].': ruang lingkup dan area layanan.')

@section ('content')
    <section class="mx-auto max-w-4xl px-4 py-10">
        <h1 class="text-3xl font-bold text-slate-900">{{ $service['name'] }} di {{ $city['name'] }}</h1>
        <div class="prose prose-slate mt-6 max-w-none">
            <p>
                Konten spesifik untuk <strong>{{ $service['name'] }}</strong> di wilayah
                <strong>{{ $city['name'] }}, {{ $city['province'] }}</strong> menyusul.
            </p>
        </div>
        <a href="{{ 'https://wa.me/628118500177?text=' . urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai '.$service['name'].' di '.$city['name'].'.') }}" target="_blank" rel="noopener" class="mt-8 inline-block rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white hover:bg-emerald-700">
            Konsultasi Sekarang →
        </a>
    </section>
@endsection
