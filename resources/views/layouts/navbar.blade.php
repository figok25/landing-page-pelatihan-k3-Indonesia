<header id="navbar" class="navbar">
    <div class="navbar-container">

        {{-- Logo --}}
        <a
            href="{{ url('/') }}"
            class="navbar-logo"
        >
            {{ config('app.name', 'Laravel') }}
        </a>

        {{-- Desktop Navigation --}}
        <nav class="navbar-menu">

            <a href="{{ url('/') }}">
                Home
            </a>

            <a href="{{ url('/about') }}">
                About
            </a>

            <a href="{{ url('/services') }}">
                Services
            </a>

            <a href="{{ url('/portfolio') }}">
                Portfolio
            </a>

            <a href="{{ url('/contact') }}">
                Contact
            </a>

        </nav>

        {{-- Mobile Menu Button --}}
        <button
            type="button"
            id="mobile-menu-button"
            class="mobile-menu-button"
            aria-label="Toggle navigation"
            aria-expanded="false"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>

    {{-- Mobile Navigation --}}
    <nav
        id="mobile-menu"
        class="mobile-menu"
        aria-hidden="true"
    >
        <a href="{{ url('/') }}">
            Home
        </a>

        <a href="{{ url('/about') }}">
            About
        </a>

        <a href="{{ url('/services') }}">
            Services
        </a>

        <a href="{{ url('/portfolio') }}">
            Portfolio
        </a>

        <a href="{{ url('/contact') }}">
            Contact
        </a>
    </nav>
</header>