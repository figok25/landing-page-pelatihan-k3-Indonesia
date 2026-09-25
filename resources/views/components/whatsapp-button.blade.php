```blade
@props(['message' => 'Halo Admin, saya ingin mendapatkan informasi mengenai pelatihan K3.'])

<a
    href="https://wa.me/6281234567890?text={{ urlencode($message) }}"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Hubungi Admin melalui WhatsApp"
    class="group fixed right-6 bottom-6 z-50 flex items-center gap-3"
>
    <span
        class="pointer-events-none rounded-lg bg-slate-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-lg transition-opacity duration-300 group-hover:opacity-100"
    >
        Hubungi Admin
    </span>

    <span
        class="flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] text-white shadow-lg transition-all duration-300 group-hover:scale-110 group-hover:bg-[#20bd5a] group-hover:shadow-xl"
    >
        <i class="bx bxl-whatsapp text-3xl"></i>
    </span>
</a>
```
