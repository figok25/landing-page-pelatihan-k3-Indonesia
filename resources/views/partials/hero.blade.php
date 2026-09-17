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