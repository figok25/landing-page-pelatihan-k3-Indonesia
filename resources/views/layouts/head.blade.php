<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @php
        $pageTitle = trim($__env->yieldContent('title')) ?: 'Pelatihan K3 Indonesia | Pelatihan & Jasa K3';
        $pageDescription = trim($__env->yieldContent('description')) ?: 'Pusat pelatihan dan jasa K3 di seluruh Indonesia.';
    @endphp

    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}" />
    <link rel="canonical" href="{{ url()->current() }}" />

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

    <meta property="og:type" content="{{ isset($article) ? 'article' : 'website' }}" />
    <meta property="og:title" content="{{ $pageTitle }}" />
    <meta property="og:description" content="{{ $pageDescription }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    @vite('resources/css/app.css')
    @stack('styles')
</head>
