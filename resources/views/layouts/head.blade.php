<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ $title ?? 'Pelatihan K3 Indonesia | Pelatihan & Sertifikasi K3' }}</title>
    <meta
        name="description"
        content="{{ $metaDescription ?? 'Pusat pelatihan dan jasa K3 terpercaya di seluruh Indonesia.' }}" />
    <link rel="canonical" href="{{ url()->current() }}" />

    {{-- Favicon (SVG untuk browser modern, PNG/ICO sebagai fallback + PWA/Google
    search result icon, apple-touch-icon untuk iOS home screen) --}}
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any" />
    <link rel="icon" href="{{ asset('favicon-16x16.png') }}" type="image/png" sizes="16x16" />
    <link rel="icon" href="{{ asset('favicon-32x32.png') }}" type="image/png" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" sizes="180x180" />
    <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
    <meta name="theme-color" content="#0b253d" />

    @isset($city)
        <meta name="robots" content="noindex, follow" />
    @else
        <meta name="robots" content="index, follow" />
    @endisset

    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $title ?? 'Pelatihan K3 Indonesia' }}" />
    <meta
        property="og:description"
        content="{{ $metaDescription ?? 'Pusat pelatihan dan jasa K3 terpercaya di seluruh Indonesia.' }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    @vite ('resources/css/app.css')
    @stack ('styles')
</head>
