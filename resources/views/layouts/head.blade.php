<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Pelatihan K3 Indonesia | Pelatihan & Sertifikasi K3' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Pusat pelatihan dan jasa K3 terpercaya di seluruh Indonesia.' }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Pelatihan K3 Indonesia' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Pusat pelatihan dan jasa K3 terpercaya di seluruh Indonesia.' }}">
    <meta property="og:url" content="{{ url()->current() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>