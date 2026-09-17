<header class="sticky top-0 z-40 border-b border-slate-100 bg-white/95 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 lg:px-8">
        <a href="{{ route('home') }}" class="flex items-center gap-2 font-bold text-emerald-700">
            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-600 text-white">K3</span>
            <span class="leading-tight">
                PelatihanK3<br>
                <span class="text-xs font-medium text-slate-500">Indonesia</span>
            </span>
        </a>

        <nav class="hidden items-center gap-6 text-sm font-medium text-slate-600 md:flex">
            <a href="{{ route('home') }}" class="hover:text-emerald-700">Beranda</a>
            <a href="{{ route('training.index') }}" class="hover:text-emerald-700">Pelatihan</a>
            <a href="{{ route('service.index') }}" class="hover:text-emerald-700">Jasa</a>
            <a href="{{ route('about') }}" class="hover:text-emerald-700">Tentang Kami</a>
            <a href="{{ route('contact') }}" class="hover:text-emerald-700">Kontak</a>
        </nav>

        <a
            href="https://wa.me/6281100000000?text=Halo%20Admin%2C%20saya%20ingin%20bertanya%20mengenai%20pelatihan%20K3."
            target="_blank"
            rel="noopener"
            class="hidden items-center gap-2 rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700 md:inline-flex"
        >
            Hubungi Kami
        </a>

        <button type="button" class="md:hidden" aria-label="Buka menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</header>
