document.addEventListener('DOMContentLoaded', function () {
    const elementsToFadeIn = document.querySelectorAll('header, nav, section, footer');
    const elementsToSlideIn = document.querySelectorAll('section');

    const fadeInObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                fadeInObserver.unobserve(entry.target);
            }
        });
    });

    elementsToFadeIn.forEach(element => {
        fadeInObserver.observe(element);
    });

    const slideInObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
                slideInObserver.unobserve(entry.target);
            }
        });
    });

    elementsToSlideIn.forEach(element => {
        slideInObserver.observe(element);
    });
});