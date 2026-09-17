<footer class="footer">

    <div class="footer-container">

        <div class="footer-brand">

            <a
                href="{{ url('/') }}"
                class="footer-logo"
            >
                {{ config('app.name', 'Laravel') }}
            </a>

            <p>
                Building reliable digital solutions for modern businesses.
            </p>

        </div>

        <div class="footer-links">

            <div>
                <h3>Navigation</h3>

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
            </div>

            <div>
                <h3>Contact</h3>

                <a href="{{ url('/contact') }}">
                    Contact Us
                </a>

                <a href="mailto:hello@example.com">
                    hello@example.com
                </a>
            </div>

        </div>

    </div>

    <div class="footer-bottom">
        <p>
            &copy; {{ date('Y') }}
            {{ config('app.name', 'Laravel') }}.
            All rights reserved.
        </p>
    </div>

</footer>