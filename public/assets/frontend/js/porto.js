// script.js

document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
    }

    // 1. Initialize Intersection Observer for Scroll Animations
    const observerOptions = {
        root: null, // use viewport
        rootMargin: '0px',
        threshold: 0.15 // trigger when 15% of the element is visible
    };

    const scrollObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the 'is-visible' class to trigger CSS transition
                entry.target.classList.add('is-visible');
                // Optional: Stop observing once animated in to keep it visible
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // 2. Select all elements that need to animate
    const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');

    // 3. Apply observer to each element
    elementsToAnimate.forEach(el => {
        scrollObserver.observe(el);
    });

    // 4. Horizontal Scroll Carousel Controls & Hover Reveal
    const wrapper = document.getElementById('studi-kasus-wrapper');
    const container = document.getElementById('studi-kasus-container');
    const prevBtn = document.getElementById('studi-kasus-prev');
    const nextBtn = document.getElementById('studi-kasus-next');

    if (container && prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
            container.scrollBy({ left: -450, behavior: 'smooth' });
        });

        nextBtn.addEventListener('click', () => {
            container.scrollBy({ left: 450, behavior: 'smooth' });
        });
    }

    if (wrapper && prevBtn && nextBtn) {
        wrapper.addEventListener('mouseenter', () => {
            prevBtn.classList.add('is-visible');
            nextBtn.classList.add('is-visible');
        });
        wrapper.addEventListener('mouseleave', () => {
            prevBtn.classList.remove('is-visible');
            nextBtn.classList.remove('is-visible');
        });
    }
});
