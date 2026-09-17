<x-layouts::app
    :title="'Pelatihan '.$training['name'].' di '.$city['name'].' | Informasi Pelatihan K3'"
    :metaDescription="'Informasi pelatihan '.$training['name'].' di '.$city['name'].': jadwal, materi, dan cara pendaftaran.'"
>
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Pelatihan', 'url' => route('training.index')],
        ['label' => $training['name'], 'url' => route('training.show', ['training' => $training['slug']])],
        ['label' => $city['name'], 'url' => null],
    ]" />

    <section class="mx-auto max-w-4xl px-4 py-10 lg:px-8">
        <h1 class="text-3xl font-bold text-slate-900">
            Pelatihan {{ $training['name'] }} di {{ $city['name'] }}
        </h1>

        {{-- TODO: konten harus benar-benar spesifik untuk kombinasi program +
        kota ini (Intro, Informasi Pelatihan, Materi, Persyaratan, Manfaat,
        Lokasi/Area Layanan, FAQ, CTA — blueprint #9 & #15). JANGAN dibuat
        dengan isi 100% sama untuk kota lain (blueprint #14). --}}
        <div class="prose prose-slate mt-6 max-w-none">
            <p>
                Konten spesifik untuk pelatihan <strong>{{ $training['name'] }}</strong> di wilayah
                <strong>{{ $city['name'] }}, {{ $city['province'] }}</strong> menyusul — mencakup jadwal,
                materi, persyaratan, dan area layanan setempat.
            </p>
        </div>

        <a
            href="{{ 'https://wa.me/6281100000000?text=' . urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai Pelatihan '.$training['name'].' di '.$city['name'].'.') }}"
            target="_blank"
            rel="noopener"
            class="mt-8 inline-block rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white hover:bg-emerald-700"
        >
            Konsultasi Sekarang →
        </a>
    </section>
</x-layouts::app>
