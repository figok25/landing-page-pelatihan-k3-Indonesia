document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('navbarMobileToggle');
    const menu = document.getElementById('navbarMobileMenu');

    if (!toggle || !menu) {
        return;
    }

    toggle.addEventListener('click', () => {
        const isOpen = menu.classList.toggle('open');

        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

        const icon = toggle.querySelector('i');

        if (icon) {
            icon.classList.toggle('bx-menu', !isOpen);
            icon.classList.toggle('bx-x', isOpen);
        }
    });

    // Tutup menu ketika link diklik
    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            menu.classList.remove('open');

            toggle.setAttribute('aria-expanded', 'false');

            const icon = toggle.querySelector('i');

            if (icon) {
                icon.classList.remove('bx-x');
                icon.classList.add('bx-menu');
            }
        });
    });

    // Tutup menu ketika menekan Escape
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            menu.classList.remove('open');

            toggle.setAttribute('aria-expanded', 'false');

            const icon = toggle.querySelector('i');

            if (icon) {
                icon.classList.remove('bx-x');
                icon.classList.add('bx-menu');
            }
        }
    });
});
