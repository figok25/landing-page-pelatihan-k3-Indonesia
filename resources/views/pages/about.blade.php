<x-layouts::app :title="'Tentang Kami | PelatihanK3 Indonesia'">
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Tentang Kami', 'url' => null],
    ]" />

    <section class="mx-auto max-w-4xl px-4 py-12 lg:px-8">
        <h1 class="text-3xl font-bold text-slate-900">Tentang PelatihanK3 Indonesia</h1>
        <p class="mt-4 text-slate-600">
            {{-- TODO: isi profil perusahaan sesuai materi resmi dari client.
            Jangan mengarang klaim (akreditasi, jumlah alumni, dsb) sebelum
            ada datanya, sesuai prinsip blueprint #22 "jangan mengarang". --}}
            Konten profil perusahaan menyusul sesuai materi resmi dari client.
        </p>
    </section>
</x-layouts::app>
