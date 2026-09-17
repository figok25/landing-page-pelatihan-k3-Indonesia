<x-layouts::app
    :title="$service['name'].' di '.$city['name'].' | Layanan Jasa K3'"
    :metaDescription="'Informasi '.$service['name'].' di '.$city['name'].': ruang lingkup dan area layanan.'"
>
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Jasa', 'url' => route('service.index')],
        ['label' => $service['name'], 'url' => route('service.show', ['service' => $service['slug']])],
        ['label' => $city['name'], 'url' => null],
    ]" />

    <section class="mx-auto max-w-4xl px-4 py-10 lg:px-8">
        <h1 class="text-3xl font-bold text-slate-900">
            {{ $service['name'] }} di {{ $city['name'] }}
        </h1>

        {{-- TODO: konten spesifik kombinasi jasa + kota ini, jangan disamakan
        dengan kota lain (blueprint #14). --}}
        <div class="prose prose-slate mt-6 max-w-none">
            <p>
                Konten spesifik untuk <strong>{{ $service['name'] }}</strong> di wilayah
                <strong>{{ $city['name'] }}, {{ $city['province'] }}</strong> menyusul — mencakup ruang lingkup
                layanan dan area cakupan setempat.
            </p>
        </div>

        <a
            href="{{ 'https://wa.me/6281100000000?text=' . urlencode('Halo Admin, saya ingin mendapatkan informasi mengenai '.$service['name'].' di '.$city['name'].'.') }}"
            target="_blank"
            rel="noopener"
            class="mt-8 inline-block rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white hover:bg-emerald-700"
        >
            Konsultasi Sekarang →
        </a>
    </section>
</x-layouts::app>
