<x-layouts::app>
    {{-- Struktur homepage mengikuti blueprint #17: Hero, Layanan, Program
    Unggulan, Jasa, Keunggulan, Area Layanan, CTA. Visual detail (warna,
    spacing, foto hero) menyusul mengikuti screenshot referensi. --}}

    <section class="bg-slate-900">
        <div class="mx-auto grid max-w-7xl gap-8 px-4 py-16 lg:grid-cols-2 lg:px-8">
            <div class="text-white">
                <span class="mb-4 inline-block rounded-full bg-emerald-600/20 px-3 py-1 text-xs font-semibold text-emerald-400">
                    PUSAT PELATIHAN & JASA K3 TERPERCAYA
                </span>
                <h1 class="text-3xl font-bold leading-tight md:text-5xl">
                    Tingkatkan Kompetensi, Wujudkan Lingkungan Kerja yang
                    <span class="text-emerald-400">Aman</span> dan
                    <span class="text-emerald-400">Produktif</span>
                </h1>
                <p class="mt-4 text-slate-300">
                    PelatihanK3 Indonesia menyediakan {{ $stats['total_trainings'] }} program pelatihan dan
                    {{ $stats['total_services'] }} jenis jasa yang didukung oleh tenaga ahli berpengalaman dan
                    berstandar nasional.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ route('training.index') }}" class="rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white hover:bg-emerald-700">
                        Lihat Semua Program
                    </a>
                    <a href="{{ route('contact') }}" class="rounded-lg border border-white/30 px-5 py-3 font-semibold text-white hover:bg-white/10">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-16 lg:px-8">
        <span class="text-xs font-semibold uppercase tracking-wide text-emerald-700">Layanan Kami</span>
        <h2 class="mt-1 text-2xl font-bold text-slate-900 md:text-3xl">
            Dua Layanan Utama untuk Kebutuhan K3 Anda
        </h2>

        <div class="mt-8 grid gap-6 md:grid-cols-2">
            <div class="rounded-xl border border-slate-100 bg-white p-6 shadow-sm">
                <h3 class="text-lg font-semibold text-slate-900">Pelatihan</h3>
                <p class="mt-1 text-sm text-slate-500">{{ $stats['total_trainings'] }} Program Pelatihan</p>
                <p class="mt-3 text-sm text-slate-600">
                    Tingkatkan kompetensi SDM Anda dengan pelatihan bersertifikat dari instruktur berpengalaman
                    dan berstandar nasional.
                </p>
                <a href="{{ route('training.index') }}" class="mt-4 inline-block text-sm font-semibold text-emerald-700 hover:underline">
                    Lihat Semua Pelatihan →
                </a>
            </div>

            <div class="rounded-xl border border-slate-100 bg-white p-6 shadow-sm">
                <h3 class="text-lg font-semibold text-slate-900">Jasa</h3>
                <p class="mt-1 text-sm text-slate-500">{{ $stats['total_services'] }} Jenis Jasa</p>
                <p class="mt-3 text-sm text-slate-600">
                    Layanan konsultasi dan perizinan profesional untuk mendukung kepatuhan dan keberlanjutan
                    bisnis Anda.
                </p>
                <a href="{{ route('service.index') }}" class="mt-4 inline-block text-sm font-semibold text-emerald-700 hover:underline">
                    Lihat Semua Jasa →
                </a>
            </div>
        </div>
    </section>

    <section class="bg-slate-50 py-16">
        <div class="mx-auto max-w-7xl px-4 lg:px-8">
            <span class="text-xs font-semibold uppercase tracking-wide text-emerald-700">Program Pelatihan Unggulan</span>
            <h2 class="mt-1 text-2xl font-bold text-slate-900 md:text-3xl">
                {{ $stats['total_trainings'] }} Program Pelatihan Tersedia untuk Anda
            </h2>

            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($featuredTrainings as $training)
                    <x-program-card :training="$training" />
                @endforeach
            </div>

            <a href="{{ route('training.index') }}" class="mt-6 inline-block rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white hover:bg-emerald-700">
                Lihat Semua Pelatihan →
            </a>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-16 lg:px-8">
        <span class="text-xs font-semibold uppercase tracking-wide text-emerald-700">Jasa Kami</span>
        <h2 class="mt-1 text-2xl font-bold text-slate-900 md:text-3xl">
            {{ $stats['total_services'] }} Jenis Jasa Konsultasi & Perizinan
        </h2>

        <div class="mt-8 grid gap-4 sm:grid-cols-2">
            @foreach ($featuredServices as $service)
                <x-service-card :service="$service" />
            @endforeach
        </div>

        <a href="{{ route('service.index') }}" class="mt-6 inline-block rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white hover:bg-emerald-700">
            Lihat Semua Jasa →
        </a>
    </section>

    <section class="bg-slate-900 py-16 text-white">
        <div class="mx-auto max-w-7xl px-4 text-center lg:px-8">
            <span class="text-xs font-semibold uppercase tracking-wide text-emerald-400">Jangkauan Layanan</span>
            <h2 class="mt-1 text-2xl font-bold md:text-3xl">Tersedia di Seluruh Indonesia</h2>
            <p class="mx-auto mt-3 max-w-2xl text-slate-300">
                Dengan data wilayah lengkap dari {{ $stats['total_provinces'] }} provinsi dan
                {{ $stats['total_cities'] }} kabupaten/kota, kami siap melayani kebutuhan pelatihan dan jasa K3
                di seluruh Indonesia.
            </p>

            <div class="mx-auto mt-8 grid max-w-2xl grid-cols-2 gap-4 sm:grid-cols-3">
                <div class="rounded-xl bg-white/5 p-4">
                    <div class="text-2xl font-bold">{{ $stats['total_provinces'] }}</div>
                    <div class="text-xs text-slate-400">Provinsi</div>
                </div>
                <div class="rounded-xl bg-white/5 p-4">
                    <div class="text-2xl font-bold">{{ $stats['total_cities'] }}</div>
                    <div class="text-xs text-slate-400">Kabupaten/Kota</div>
                </div>
                <div class="rounded-xl bg-white/5 p-4">
                    <div class="text-2xl font-bold">{{ $stats['total_trainings'] + $stats['total_services'] }}</div>
                    <div class="text-xs text-slate-400">Program & Jasa</div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-emerald-600 py-10">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-4 text-center text-white sm:flex-row sm:text-left lg:px-8">
            <div>
                <h2 class="text-xl font-bold">Siap Meningkatkan Kompetensi Anda?</h2>
                <p class="text-sm text-emerald-50">Hubungi kami sekarang untuk konsultasi, informasi program, atau pendaftaran pelatihan.</p>
            </div>
            <a href="https://wa.me/6281100000000" target="_blank" rel="noopener" class="whitespace-nowrap rounded-lg bg-white px-5 py-3 font-semibold text-emerald-700 hover:bg-emerald-50">
                Chat via WhatsApp →
            </a>
        </div>
    </section>
</x-layouts::app>
