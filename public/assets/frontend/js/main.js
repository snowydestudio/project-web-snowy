document.addEventListener("DOMContentLoaded", function() {
    
    // ==========================================
    // 1. Logika untuk Slider/Carousel (Drag to Scroll)
    // ==========================================
    const slider = document.getElementById('serviceCarousel');
    let isDown = false;
    let startX;
    let scrollLeft;

    if (slider) {
        // Saat mouse ditekan
        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('cursor-grabbing');
            slider.classList.remove('cursor-grab');
            
            // Matikan snapping CSS sementara agar geseran mouse terasa mulus
            slider.style.scrollSnapType = 'none'; 
            
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        // Saat mouse keluar dari area carousel
        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('cursor-grabbing');
            slider.classList.add('cursor-grab');
            slider.style.scrollSnapType = ''; // Nyalakan snapping kembali
        });

        // Saat klik mouse dilepas
        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('cursor-grabbing');
            slider.classList.add('cursor-grab');
            slider.style.scrollSnapType = ''; // Nyalakan snapping kembali
        });

        // Saat mouse digeser
        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return; // Hentikan fungsi jika mouse tidak sedang ditekan
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2; // Angka 2 adalah kecepatan geser
            slider.scrollLeft = scrollLeft - walk;
        });
    }

    // ==========================================
    // 2. Logika untuk Accordion FAQ
    // ==========================================
    const faqToggles = document.querySelectorAll('.faq-toggle');
    
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const content = toggle.nextElementSibling;
            const icon = toggle.querySelector('span');
            
            // Tutup semua FAQ lain yang sedang terbuka
            document.querySelectorAll('.faq-content').forEach(c => {
                if (c !== content && !c.classList.contains('hidden')) {
                    c.classList.add('hidden');
                    c.previousElementSibling.querySelector('span').textContent = '+';
                    c.previousElementSibling.querySelector('span').classList.remove('rotate-45');
                }
            });

            // Buka/Tutup FAQ yang sedang diklik
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.textContent = '+';
                icon.classList.add('rotate-45'); // Memutar ikon '+' menjadi 'x'
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-45');
            }
        });
    });

    // ==========================================
    // 3. INISIALISASI ANIMASI SCROLL (AOS)
    // ==========================================
    // Pastikan script AOS dari CDN sudah dipanggil di HTML/Blade Anda
    if (typeof AOS !== 'undefined') {
        AOS.init({
            once: true,        // Animasi hanya berjalan 1x saat pertama kali di-scroll ke bawah
            offset: 80,        // Jarak dari bawah layar sebelum animasi dimulai (dalam px)
            duration: 800,     // Durasi animasi (800 milidetik = sedikit lebih santai)
            easing: 'ease-out-cubic', // Efek perlambatan yang elegan
        });
    }

});