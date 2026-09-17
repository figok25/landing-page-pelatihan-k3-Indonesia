<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include ('layouts.head')
</head>

<body>
    @include ('layouts.navbar')

    <main>
        @yield ('content')
    </main>

    @include ('components.whatsapp-button')

    @include ('layouts.footer')

    @vite ('resources/js/app.js')

    @stack ('scripts')
</body>
</html>
