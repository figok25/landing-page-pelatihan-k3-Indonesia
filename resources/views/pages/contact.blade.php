<x-layouts::app :title="'Kontak | PelatihanK3 Indonesia'">
    <x-breadcrumb
        :items="[
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Kontak', 'url' => null],
        ]" />

    <section class="mx-auto max-w-4xl px-4 py-12 lg:px-8">
        <h1 class="text-3xl font-bold text-slate-900">Hubungi Kami</h1>
        <p class="mt-4 text-slate-600">Konsultasikan kebutuhan pelatihan dan jasa K3 perusahaan Anda melalui WhatsApp.</p>
        <a
            href="https://wa.me/6281100000000"
            target="_blank"
            rel="noopener"
            class="mt-6 inline-block rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white hover:bg-emerald-700">
            Chat via WhatsApp →
        </a>
    </section>
</x-layouts::app>
