//

/* Compteur animé pour les statistiques du hero */
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    counters.forEach((el) => {
        const target = parseInt(el.dataset.target, 10);

        if (prefersReducedMotion) {
            el.textContent = target;
            return;
        }

        const duration = 2200;
        const start = performance.now();

        function step(now) {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.round(eased * target);
            if (progress < 1) {
                requestAnimationFrame(step);
            }
        }

        requestAnimationFrame(step);
    });
});

/* Sélecteur de langue personnalisé */
document.addEventListener('DOMContentLoaded', () => {
    const picker = document.querySelector('.language-picker');
    if (!picker) return;

    const trigger = picker.querySelector('.language-trigger');
    const menu = picker.querySelector('.language-menu');

    function closeMenu() {
        picker.classList.remove('is-open');
        trigger.setAttribute('aria-expanded', 'false');
        menu.classList.remove('is-visible');
        menu.hidden = true;
    }

    trigger.addEventListener('click', () => {
        const isOpen = !menu.hidden;

        if (isOpen) {
            closeMenu();
        } else {
            menu.hidden = false;
            picker.classList.add('is-open');
            trigger.setAttribute('aria-expanded', 'true');
            requestAnimationFrame(() => {
                menu.classList.add('is-visible');
            });
        }
    });

    document.addEventListener('click', (event) => {
        if (!picker.contains(event.target)) {
            closeMenu();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
            trigger.focus();
        }
    });
});
