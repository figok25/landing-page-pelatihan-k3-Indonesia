<footer class="border-t border-slate-800 bg-slate-900 text-slate-300">
    <div class="mx-auto grid max-w-7xl gap-8 px-4 py-12 md:grid-cols-4 lg:px-8">
        <div>
            <div class="mb-3 flex items-center gap-2 font-bold text-white">
                <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-600">K3</span>
                PelatihanK3 Indonesia
            </div>
            <p class="text-sm text-slate-400">
                Solusi Pelatihan dan Jasa Keselamatan Kerja dan Masa Depan yang Lebih Baik.
            </p>
        </div>

        <div>
            <h3 class="mb-3 text-sm font-semibold uppercase tracking-wide text-white">Navigasi</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('home') }}" class="hover:text-white">Beranda</a></li>
                <li><a href="{{ route('training.index') }}" class="hover:text-white">Pelatihan</a></li>
                <li><a href="{{ route('service.index') }}" class="hover:text-white">Jasa</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-white">Tentang Kami</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white">Kontak</a></li>
            </ul>
        </div>

        <div>
            <h3 class="mb-3 text-sm font-semibold uppercase tracking-wide text-white">Layanan</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('training.index') }}" class="hover:text-white">Pelatihan K3</a></li>
                <li><a href="{{ route('service.index') }}" class="hover:text-white">Jasa Konsultasi</a></li>
                <li><a href="{{ route('service.index') }}" class="hover:text-white">Perizinan &amp; Riksa Uji</a></li>
            </ul>
        </div>

        <div>
            <h3 class="mb-3 text-sm font-semibold uppercase tracking-wide text-white">Kontak Kami</h3>
            <ul class="space-y-2 text-sm">
                <li>+62 811-0000-000 (WA)</li>
                <li>info@pelatihank3indonesia.com</li>
            </ul>
        </div>
    </div>

    <div class="border-t border-slate-800 py-4 text-center text-xs text-slate-500">
        &copy; {{ date('Y') }} PelatihanK3 Indonesia. All rights reserved.
    </div>
</footer>
