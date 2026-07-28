<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snowy - Portofolio</title>
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind Config for Custom Colors/Fonts -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        primary: '#0D7B8A', // Teal color matching navbar and agency theme
                        secondary: '#F0F9FA', // Background color for CTA section
                        ctaBg: '#E6F4F9',   // Background section CTA
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="component/porto.css">
</head>
<body class="text-gray-900 bg-white font-sans antialiased overflow-x-hidden">

    <!-- Navbar -->
    <div id="navbar-placeholder"></div>

    <!-- Hero Section -->
    <section class="pt-40 pb-20 px-6 md:px-16 max-w-4xl mx-auto text-center animate-on-scroll">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight tracking-tight mb-6">
            Setiap Proyek Dimulai dengan Kepercayaan.
        </h1>
        <p class="text-gray-500 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
            Setiap proyek adalah kolaborasi panjang yang dirancang untuk mencapai satu titik: pertumbuhan dan berkembang.
        </p>
    </section>

    <!-- Studi Kasus Pilihan -->
    <section id="studi-kasus-section" class="py-16 px-6 md:px-16 max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-8 animate-on-scroll">
            <span class="text-sm font-medium text-gray-400 flex items-center gap-2">
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-right">Studi Kasus Pilihan</h2>
        </div>
        
        <div id="studi-kasus-wrapper" class="relative group/carousel">
            <!-- Scroll Navigation Buttons -->
            <button id="studi-kasus-prev" aria-label="Sebelumnya" class="scroll-nav-btn absolute -left-4 md:-left-6 top-1/2 z-20 bg-white/90 hover:bg-white text-gray-900 w-12 h-12 rounded-full shadow-xl flex items-center justify-center border border-gray-100 hover:scale-110">
                <i class="fas fa-chevron-left text-lg"></i>
            </button>
            <button id="studi-kasus-next" aria-label="Selanjutnya" class="scroll-nav-btn absolute -right-4 md:-right-6 top-1/2 z-20 bg-white/90 hover:bg-white text-gray-900 w-12 h-12 rounded-full shadow-xl flex items-center justify-center border border-gray-100 hover:scale-110">
                <i class="fas fa-chevron-right text-lg"></i>
            </button>

            <!-- Card Container -->
            <div id="studi-kasus-container" class="flex overflow-x-auto gap-6 pb-4 snap-x snap-mandatory no-scrollbar" style="scroll-behavior: smooth;">
                <!-- Card 1 -->
                <div class="flex-none w-[85vw] sm:w-[500px] md:w-[580px] h-[360px] md:h-[400px] relative rounded-3xl overflow-hidden group cursor-pointer snap-start shrink-0">
                    <img src="image porto/Frame 89.png" alt="Frame 89" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <!-- Content -->
                    <div class="absolute bottom-0 left-0 p-6 md:p-8 text-white w-full">
                        <p class="text-sm font-medium opacity-80 mb-2">Industri: Optik | Services: Brand Identity, Landing Page, UI/UX</p>
                        <h3 class="text-2xl md:text-3xl font-bold mb-2">Optik Dwitunggal</h3>
                        <p class="text-gray-200 text-sm md:text-base">Mengubah Optik Dwitunggal Menjadi Brand yang Siap di Era Digital.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex-none w-[85vw] sm:w-[500px] md:w-[580px] h-[360px] md:h-[400px] relative rounded-3xl overflow-hidden group cursor-pointer snap-start shrink-0">
                    <img src="image porto/Frame 90.png" alt="Frame 90" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
            </div>
        </div>
    </section>

    <!-- Tim di Balik Proyek Ini -->
    <section class="py-16 px-6 md:px-16 max-w-7xl mx-auto">
        <div class="mb-12 animate-on-scroll">
            <h2 class="text-3xl font-bold mb-4">Tim Di Balik Proyek Ini</h2>
            <p class="text-gray-600 max-w-2xl">Proyek ini adalah hasil kolaborasi dengan keahlian yang saling melengkapi dalam pengalaman dan daya masing-masing anggota.</p>
        </div>

        <div class="flex flex-col gap-8">
            <!-- Member 1 -->
            <div class="flex items-center gap-6 animate-on-scroll delay-100">
                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=200&auto=format&fit=crop" alt="Founder" class="w-20 h-20 rounded-full object-cover shadow-md">
                <div>
                    <h4 class="text-xl font-bold">Founder & Creative Director</h4>
                    <p class="text-gray-500 mt-1">Memimpin strategi desain dan operasional.</p>
                </div>
            </div>
            <!-- Member 2 -->
            <div class="flex items-center gap-6 animate-on-scroll delay-200">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200&auto=format&fit=crop" alt="UI/UX Designer" class="w-20 h-20 rounded-full object-cover shadow-md">
                <div>
                    <h4 class="text-xl font-bold">UI/UX Designer & Front-End Developer</h4>
                    <p class="text-gray-500 mt-1">Merancang antarmuka dan pengalaman pengguna serta eksekusi kode front-end.</p>
                </div>
            </div>
            <!-- Member 3 -->
            <div class="flex items-center gap-6 animate-on-scroll delay-300">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=200&auto=format&fit=crop" alt="Back-End Developer" class="w-20 h-20 rounded-full object-cover shadow-md">
                <div>
                    <h4 class="text-xl font-bold">Back-End Developer & Automation Engineer</h4>
                    <p class="text-gray-500 mt-1">Membangun sistem dan otomasi yang mendukung kebutuhan bisnis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dokumentasi -->
    <section class="py-16 px-6 md:px-16 max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 animate-on-scroll">Dokumentasi</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="h-80 rounded-2xl overflow-hidden animate-on-scroll delay-100">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=600&auto=format&fit=crop" alt="Dokumentasi 1" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 cursor-pointer">
            </div>
            <div class="h-80 rounded-2xl overflow-hidden animate-on-scroll delay-200">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=600&auto=format&fit=crop" alt="Dokumentasi 2" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 cursor-pointer">
            </div>
            <div class="h-80 rounded-2xl overflow-hidden animate-on-scroll delay-300">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=600&auto=format&fit=crop" alt="Dokumentasi 3" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 cursor-pointer">
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-secondary">
        <div class="max-w-4xl mx-auto px-4 text-center" data-aos="zoom-in">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Saatnya Bisnis Anda Tampil Lebih Profesional.</h2>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-primary text-white px-10 py-4 rounded-full text-lg font-semibold hover:bg-teal-700 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">Konsultasi</a>
                <a href="#" class="bg-white text-gray-900 border border-gray-200 px-10 py-4 rounded-full text-lg font-semibold hover:bg-gray-50 transition shadow-sm hover:shadow transform hover:-translate-y-1">Pesan</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div id="footer-placeholder"></div>

    <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Load Navbar & Footer via Fetch -->
    <script>
        // Load Navbar
        fetch('navbar.html')
            .then(res => res.text())
            .then(html => {
                document.getElementById('navbar-placeholder').innerHTML = html;
                const currentPage = window.location.pathname.split('/').pop() || 'portofolio.html';
                document.querySelectorAll('#navbar-placeholder a').forEach(link => {
                    link.classList.remove('text-primary');
                    link.classList.add('text-gray-500');

                    const text = link.textContent.trim();
                    const href = link.getAttribute('href');
                    if (currentPage === 'portofolio.html' && (text === 'Portofolio' || href === 'portofolio.html')) {
                        link.classList.remove('text-gray-500');
                        link.classList.add('text-primary');
                    }
                });
            });

        // Load Footer
        fetch('footer.html')
            .then(res => res.text())
            .then(html => {
                document.getElementById('footer-placeholder').innerHTML = html;
            });
    </script>

    <!-- Custom JS -->
    <script src="component/porto.js"></script>
</body>
</html>
