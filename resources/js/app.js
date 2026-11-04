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
