document.addEventListener("DOMContentLoaded", () => {

    // 1. Initialize AOS (Animate On Scroll) - Identical to about.js
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
    }

    // 2. Navbar Scroll Shadow Effect - Identical to about.js
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if (nav) {
            if (window.scrollY > 20) {
                nav.classList.add('shadow-sm');
            } else {
                nav.classList.remove('shadow-sm');
            }
        }
    });

    // 3. Mobile Menu Handler - Identical to about.js
    document.addEventListener('click', (e) => {
        const btn = e.target.closest('#mobile-menu-btn');
        if (btn) {
            alert('Fungsi menu mobile dapat ditambahkan di sini (Toggle class hidden pada elemen dropdown)');
        }
    });

    // 4. Accordion & Sticky Side Number Navbar Logic for "Alur Kerja Kami"
    const accordions = document.querySelectorAll(".accordion-item");
    const navBtns = document.querySelectorAll(".faq-nav-btn");

    function setActiveNav(index) {
        navBtns.forEach((btn, i) => {
            if (i === index) {
                btn.classList.add("active");
            } else {
                btn.classList.remove("active");
            }
        });
    }

    function openAccordion(index, autoScroll = false) {
        accordions.forEach((acc, i) => {
            const content = acc.querySelector(".accordion-content");
            if (i === index) {
                acc.classList.add("open");
                if (content) content.style.maxHeight = content.scrollHeight + "px";
            } else {
                acc.classList.remove("open");
                if (content) content.style.maxHeight = null;
            }
        });

        setActiveNav(index);

        if (autoScroll && accordions[index]) {
            const navOffset = 110; // Clearance below fixed top navbar
            const elementPosition = accordions[index].getBoundingClientRect().top + window.pageYOffset;
            const offsetPosition = elementPosition - navOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });
        }
    }

    // Accordion Header Click Listener
    accordions.forEach((item, index) => {
        const header = item.querySelector("div");
        if (!header) return;

        header.addEventListener("click", () => {
            const content = item.querySelector(".accordion-content");
            const isOpen = item.classList.contains("open");

            if (isOpen) {
                item.classList.remove("open");
                if (content) content.style.maxHeight = null;
            } else {
                accordions.forEach((acc) => {
                    acc.classList.remove("open");
                    const accContent = acc.querySelector(".accordion-content");
                    if (accContent) accContent.style.maxHeight = null;
                });

                item.classList.add("open");
                if (content) content.style.maxHeight = content.scrollHeight + "px";
                setActiveNav(index);
            }
        });
    });

    // Sticky Side Number Navbar Click Listener
    navBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            const index = parseInt(btn.getAttribute("data-index"), 10);
            if (!isNaN(index)) {
                openAccordion(index, true);
            }
        });
    });

    // ScrollSpy: Update active side number navbar based on scroll position
    let isScrolling;
    window.addEventListener("scroll", () => {
        clearTimeout(isScrolling);
        isScrolling = setTimeout(() => {
            const scrollPosition = window.scrollY + 180;
            accordions.forEach((acc, i) => {
                const top = acc.offsetTop;
                const height = acc.offsetHeight;
                if (scrollPosition >= top && scrollPosition < top + height + 40) {
                    setActiveNav(i);
                }
            });
        }, 50);
    });

    // Set initial active state (item 0)
    if (navBtns.length > 0) {
        setActiveNav(0);
    }

    // 5. Horizontal Gallery Drag & Wheel Scroll
    const gallery = document.getElementById('gallery');
    if (gallery) {
        let isDown = false;
        let startX;
        let scrollLeft;

        // Transparent Scroll Navigation Buttons Click Logic
        const prevBtn = document.getElementById('gallery-prev');
        const nextBtn = document.getElementById('gallery-next');
        const prevOverlay = document.getElementById('gallery-prev-overlay');
        const nextOverlay = document.getElementById('gallery-next-overlay');

        function scrollGallery(direction) {
            const scrollDistance = 460; // Width of card + gap
            gallery.scrollBy({
                left: direction * scrollDistance,
                behavior: 'smooth'
            });
        }

        if (prevBtn) prevBtn.addEventListener('click', () => scrollGallery(-1));
        if (nextBtn) nextBtn.addEventListener('click', () => scrollGallery(1));
        if (prevOverlay) prevOverlay.addEventListener('click', () => scrollGallery(-1));
        if (nextOverlay) nextOverlay.addEventListener('click', () => scrollGallery(1));

        // Prevent native image dragging ghosting
        gallery.querySelectorAll('img').forEach(img => {
            img.addEventListener('dragstart', (e) => e.preventDefault());
        });

        // Mouse Wheel Scroll (horizontal scroll via mousewheel)
        gallery.addEventListener('wheel', (e) => {
            if (e.deltaY !== 0) {
                e.preventDefault();
                gallery.scrollLeft += e.deltaY * 1.5;
            }
        }, { passive: false });

        // Mouse Drag Scroll using Cursor
        gallery.addEventListener('mousedown', (e) => {
            isDown = true;
            gallery.classList.add('grabbing');
            startX = e.pageX - gallery.offsetLeft;
            scrollLeft = gallery.scrollLeft;
            gallery.style.scrollBehavior = 'auto';
        });

        gallery.addEventListener('mouseleave', () => {
            isDown = false;
            gallery.classList.remove('grabbing');
            gallery.style.scrollBehavior = 'smooth';
        });

        gallery.addEventListener('mouseup', () => {
            isDown = false;
            gallery.classList.remove('grabbing');
            gallery.style.scrollBehavior = 'smooth';
        });

        gallery.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - gallery.offsetLeft;
            const walk = (x - startX) * 2;
            gallery.scrollLeft = scrollLeft - walk;
        });
    }
});