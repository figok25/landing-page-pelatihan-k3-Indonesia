@props(['message' => 'Halo Admin, saya ingin mendapatkan informasi mengenai pelatihan K3.'])

<a
    href="https://wa.me/6281100000000?text={{ urlencode($message) }}"
    target="_blank"
    rel="noopener"
    class="fixed bottom-5 right-5 z-50 flex items-center gap-2 rounded-full bg-emerald-600 px-4 py-3 text-sm font-semibold text-white shadow-lg hover:bg-emerald-700"
    aria-label="Konsultasi via WhatsApp"
>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
        <path d="M20.5 3.5A11.8 11.8 0 0 0 12 0C5.4 0 0 5.4 0 12c0 2.1.6 4.1 1.6 5.9L0 24l6.3-1.6A12 12 0 0 0 12 24c6.6 0 12-5.4 12-12 0-3.2-1.2-6.2-3.5-8.5ZM12 22a9.9 9.9 0 0 1-5-1.4l-.4-.2-3.7 1 1-3.6-.2-.4A10 10 0 1 1 12 22Z"/>
    </svg>
    Konsultasi Sekarang
</a>
