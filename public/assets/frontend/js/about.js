// Initialize Animate On Scroll
AOS.init({
    duration: 800,
    once: true,
    offset: 100,
    easing: 'ease-out-cubic'
});

// Mobile Menu Toggle Logic
const btn = document.getElementById('mobile-menu-btn');
// Implementasi sederhana untuk navigasi mobile jika diperlukan
btn.addEventListener('click', () => {
    alert('Fungsi menu mobile dapat ditambahkan di sini (Toggle class hidden pada elemen dropdown)');
});

// Navbar Scroll Effect (Glassmorphism shadow enhancement)
window.addEventListener('scroll', () => {
    const nav = document.querySelector('nav');
    if (window.scrollY > 20) {
        nav.classList.add('shadow-sm');
    } else {
        nav.classList.remove('shadow-sm');
    }
});
