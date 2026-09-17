<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<meta
    name="csrf-token"
    content="{{ csrf_token() }}"
>

<title>
    @hasSection('title')
        @yield('title') | {{ config('app.name', 'Laravel') }}
    @else
        {{ config('app.name', 'Laravel') }}
    @endif
</title>

<meta
    name="description"
    content="@yield('description', config('app.name', 'Laravel'))"
>

{{-- Favicon --}}
<link
    rel="icon"
    type="image/svg+xml"
    href="https://www.google.com/s2/favicons?domain={{ request()->getHost() }}&sz=64"
>

{{-- Optional fallback favicon --}}
<link
    rel="shortcut icon"
    href="https://www.google.com/s2/favicons?domain={{ request()->getHost() }}&sz=64"
>

{{-- Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet"
>

{{-- Application CSS --}}
@vite('resources/css/app.css')

{{-- Additional page-specific styles --}}
@stack('styles')