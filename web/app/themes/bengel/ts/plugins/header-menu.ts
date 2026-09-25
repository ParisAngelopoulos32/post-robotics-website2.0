document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector<HTMLElement>('.HeaderComponent');
    const toggle = header?.querySelector<HTMLButtonElement>('.header-toggle');

    if (!header || !toggle) {
        return;
    }

    const closeMenu = () => {
        header.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
    };

    toggle.addEventListener('click', () => {
        const isOpen = header.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    header.querySelectorAll('.headermenu a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });
});
