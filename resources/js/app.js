document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('navbarMobileToggle');
    const menu = document.getElementById('navbarMobileMenu');

    if (!toggle || !menu) return;

    toggle.addEventListener('click', () => {
        const isOpen = menu.classList.toggle('open');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        toggle.querySelector('i')?.classList.replace(
            isOpen ? 'bx-menu' : 'bx-x',
            isOpen ? 'bx-x' : 'bx-menu'
        );
    });

    // Tutup menu saat salah satu link di-klik.
    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            menu.classList.remove('open');
            toggle.setAttribute('aria-expanded', 'false');
            toggle.querySelector('i')?.classList.replace('bx-x', 'bx-menu');
        });
    });
});
