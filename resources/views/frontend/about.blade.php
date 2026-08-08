<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snowy - Digital Agency</title>
    
    <!-- Google Fonts: Plus Jakarta Sans for Modern UI feel -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"'],
                    },
                    colors: {
                        primary: '#0D7B8A', // Teal color for buttons
                        secondary: '#D4F6FF',
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="component/about.css">
</head>
<body class="text-gray-800 antialiased overflow-x-hidden">

    <!-- Navbar -->
    <div id="navbar-placeholder"></div>

    <!-- 1. Hero Section -->
    <section class="w-full pt-20 pb-12 px-0 max-w-full overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.8fr_1fr] gap-6 lg:gap-8 items-center w-full">

            <!-- Left Images: 4 foto ke bawah -->
            <div class="hidden lg:flex flex-col gap-3 self-start -mt-4 lg:-mt-6" data-aos="fade-right" data-aos-duration="900">
                <div class="rounded-none overflow-hidden h-44 lg:h-52 xl:h-56 shadow-lg">
                    <img src="image about/Rectangle 22.png" alt="Rectangle 22" class="w-full h-full object-cover">
                </div>
                <div class="rounded-none overflow-hidden h-36 lg:h-44 xl:h-48 shadow-lg mr-5">
                    <img src="image about/Rectangle 23.png" alt="Rectangle 23" class="w-full h-full object-fill">
                </div>
                <div class="rounded-none overflow-hidden h-28 lg:h-32 xl:h-36 shadow-lg">
                    <img src="image about/Rectangle 24.png" alt="Rectangle 24" class="w-full h-full object-cover">
                </div>
                <div class="rounded-none overflow-hidden h-32 lg:h-36 xl:h-40 shadow-lg mr-5">
                    <img src="image about/Rectangle 25.png" alt="Rectangle 25" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Center Text -->
            <div class="text-center z-10 px-4 py-2 -mt-4 lg:-mt-8" data-aos="fade-up" data-aos-delay="150">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-5">
                    Membantu Bisnis Membangun<br class="hidden sm:inline"> Kepercayaan Secara Digital
                </h1>
                <p class="text-base md:text-lg text-gray-500 max-w-xl mx-auto leading-relaxed">
                    Lebih dari sekadar agensi, kami adalah mitra strategis Anda dalam merancang pengalaman digital yang memukau, fungsional, dan relevan dengan audiens Anda.
                </p>
            </div>

            <!-- Right Images: 4 foto ke bawah -->
            <div class="hidden lg:flex flex-col gap-3 self-start -mt-4 lg:-mt-6" data-aos="fade-left" data-aos-duration="900">
                <div class="rounded-none overflow-hidden h-44 lg:h-52 xl:h-56 shadow-lg ml-5">
                    <img src="image about/Rectangle 26.png" alt="Rectangle 26" class="w-full h-full object-cover">
                </div>
                <div class="rounded-none overflow-hidden h-36 lg:h-44 xl:h-48 shadow-lg">
                    <img src="image about/Rectangle 27.png" alt="Rectangle 27" class="w-full h-full object-cover">
                </div>
                <div class="rounded-none overflow-hidden h-28 lg:h-32 xl:h-36 shadow-lg ml-5">
                    <img src="image about/Rectangle 28.png" alt="Rectangle 28" class="w-full h-full object-cover">
                </div>
                <div class="rounded-none overflow-hidden h-32 lg:h-36 xl:h-40 shadow-lg">
                    <img src="image about/Rectangle 29.png" alt="Rectangle 29" class="w-full h-full object-fill">
                </div>
            </div>

        </div>
    </section>

    <!-- 2. Apa itu Snowy Section -->
    <section class="w-full min-h-screen flex items-center justify-center bg-white pt-20 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8 text-gray-900">Apa Itu Snowy?</h2>
            <p class="text-gray-600 text-lg md:text-xl lg:text-2xl leading-relaxed">
                Snowy adalah studio kreatif digital yang berfokus pada desain antarmuka, pengembangan produk, dan strategi digital. Kami menggabungkan estetika desain dengan fungsionalitas teknologi untuk menghasilkan karya yang tidak hanya indah dilihat, tetapi juga memberikan dampak bisnis yang nyata.
            </p>
        </div>
    </section>

    <!-- 3. Perjalanan Kami Section -->
    <section class="w-full min-h-screen flex flex-col justify-center items-center bg-gray-50 pt-20 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto w-full">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-8 md:mb-10" data-aos="fade-up">Perjalanan Kami</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl p-5" data-aos="fade-up" data-aos-delay="0">
                    <div class="overflow-hidden rounded-xl mb-4 h-40 lg:h-48">
                        <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?w=500&q=80" alt="Awal Mula" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-extrabold text-lg md:text-xl mb-1">Awal Perjalanan</h3>
                    <p class="text-xs font-semibold text-primary mb-2 flex items-center gap-1.5">
                        Mei 2026
                    </p>
                    <p class="text-gray-500 text-xs md:text-sm leading-relaxed">Snowy lahir saat kami membangun website untuk bisnis keluarga. Dari sana, kami melihat bahwa banyak bisnis belum memiliki pengalaman digital yang benar-benar mencerminkan kualitas mereka.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-2xl p-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="overflow-hidden rounded-xl mb-4 h-40 lg:h-48">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&q=80" alt="Ekspansi" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-extrabold text-lg md:text-xl mb-1">Melihat Peluang</h3>
                    <p class="text-xs font-semibold text-primary mb-2 flex items-center gap-1.5">
                        Juni 2026
                    </p>
                    <p class="text-gray-500 text-xs md:text-sm leading-relaxed">Kami menemukan banyak website yang hanya sekadar hadir secara online, tanpa identitas yang kuat maupun strategi jangka panjang. Kami percaya digital seharusnya membangun kepercayaan, bukan hanya keberadaan.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-2xl p-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="overflow-hidden rounded-xl mb-4 h-40 lg:h-48">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=500&q=80" alt="Penghargaan" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-extrabold text-lg md:text-xl mb-1">Membangun Snowy</h3>
                    <p class="text-xs font-semibold text-primary mb-2 flex items-center gap-1.5">
                        Juli 2026
                    </p>
                    <p class="text-gray-500 text-xs md:text-sm leading-relaxed">Snowy lahir saat kami membangun website untuk bisnis keluarga. Dari sana, kami melihat bahwa banyak bisnis belum memiliki pengalaman digital yang benar-benar mencerminkan kualitas mereka.</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-2xl p-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="overflow-hidden rounded-xl mb-4 h-40 lg:h-48">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500&q=80" alt="Masa Depan" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-extrabold text-lg md:text-xl mb-1">Terus Berkembang</h3>
                    <p class="text-xs font-semibold text-primary mb-2 flex items-center gap-1.5">
                        Hari Ini
                    </p>
                    <p class="text-gray-500 text-xs md:text-sm leading-relaxed">Hari ini, Snowy membantu bisnis membangun kepercayaan melalui website yang modern, mudah digunakan, dan dirancang untuk bertumbuh bersama bisnis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Makna di Balik Snowy Section -->
    <section class="w-full min-h-screen flex flex-col justify-between bg-white pt-20 overflow-hidden">
        <!-- Judul di luar Background Banner (Atas Kiri, Putih) -->
        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 pt-4 pb-4" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Makna di Balik Snowy</h2>
        </div>
        
        <!-- Background Banner Salju Full Width -->
        <div class="relative bg-slate-900 text-white w-full flex-1 flex flex-col justify-center overflow-hidden px-4 sm:px-6 lg:px-8 pt-16 md:pt-20 pb-20 md:pb-32 lg:pb-40">
            <!-- Background Image Overlay -->
            <div class="absolute inset-0 opacity-70">
                <img src="image about/background salju.png" alt="Snow Background" class="w-full h-full object-cover">
            </div>
            
            <div class="relative max-w-7xl mx-auto w-full z-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 items-start">
                    <!-- Teks Kiri: Logo + Paragraf 1 (Ujung Kanan Berada di Tengah) -->
                    <div data-aos="fade-up" class="w-full max-w-lg md:ml-auto md:pr-6">
                        <!-- Logo Solo Snowy Pas di Atas Teks Kiri -->
                        <div class="mb-6 md:mb-8" data-aos="fade-right">
                            <img src="image about/Logo solo snowy.png" alt="Snowy Logo" class="h-20 md:h-28 lg:h-32 w-auto object-contain">
                        </div>

                        <p class="text-white text-lg md:text-xl lg:text-2xl leading-relaxed font-normal opacity-95 text-justify [text-justify:inter-word]">
                            Snowy terinspirasi dari keunikan setiap kepingan salju. Tidak ada dua kepingan yang benar-benar sama, sebagaimana tidak ada dua bisnis yang memiliki tantangan yang sama. Karena itu, kami percaya setiap proyek membutuhkan riset, pendekatan, dan solusi yang dirancang secara khusus sesuai dengan kebutuhan masing-masing bisnis.
                        </p>
                    </div>
                    
                    <!-- Teks Kanan: Di Kanan & Jauh Lebih Bawah (Posisi Sebelumnya) -->
                    <div data-aos="fade-up" data-aos-delay="150" class="max-w-lg mt-28 md:mt-96 lg:mt-[440px]">
                        <p class="text-white text-lg md:text-xl lg:text-2xl leading-relaxed font-normal opacity-95 text-justify [text-justify:inter-word]">
                            Logo Snowy mengambil bentuk aliran salju (snow flow) yang melambangkan perjalanan setiap proyek. Kami percaya solusi terbaik tidak lahir secara instan, tetapi melalui proses memahami, merancang, dan menyempurnakan setiap detail hingga memberikan dampak nyata bagi bisnis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Siapa Kami Section (Team) -->
    <section class="w-full min-h-screen flex flex-col justify-center items-center bg-white pt-20 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto w-full">
            <div class="text-right mb-6 md:mb-8" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold">Siapa Kami</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <!-- Team 1 -->
                <div class="text-center group" data-aos="fade-up" data-aos-delay="0">
                    <div class="overflow-hidden rounded-2xl mb-4 shadow-lg h-56 lg:h-64 relative">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=500&q=80" alt="Team Member" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-bold text-lg md:text-xl">Syahrul Ferdiansyah</h3>
                    <p class="text-primary font-medium text-xs md:text-sm mb-2">Founder & Creative Direction</p>
                    <p class="text-gray-500 text-xs md:text-sm px-2 mb-3">Memimpin arah kreatif Snowy, memastikan setiap proyek memiliki strategi yang jelas, pengalaman pengguna yang bermakna, dan desain yang membangun kepercayaan.</p>
                    <div class="flex justify-center items-center space-x-4 text-xs md:text-sm font-semibold">
                        <a href="#" class="text-primary hover:text-teal-700 transition-colors hover:underline underline-offset-4">View Profile</a>
                        <a href="#" class="text-primary hover:text-teal-700 transition-colors hover:underline underline-offset-4">LinkedIn</a>
                    </div>
                </div>
                
                <!-- Team 2 -->
                <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                    <div class="overflow-hidden rounded-2xl mb-4 shadow-lg h-56 lg:h-64 relative">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&q=80" alt="Team Member" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-bold text-lg md:text-xl">Areif Selay</h3>
                    <p class="text-primary font-medium text-xs md:text-sm mb-2">Lead UI/UX Designer & Frontend Developer</p>
                    <p class="text-gray-500 text-xs md:text-sm px-2 mb-3">Menerjemahkan strategi menjadi antarmuka yang modern, intuitif, dan responsif untuk menghadirkan pengalaman digital yang nyaman digunakan.</p>
                    <div class="flex justify-center items-center space-x-4 text-xs md:text-sm font-semibold">
                        <a href="#" class="text-primary hover:text-teal-700 transition-colors hover:underline underline-offset-4">View Profile</a>
                        <a href="#" class="text-primary hover:text-teal-700 transition-colors hover:underline underline-offset-4">LinkedIn</a>
                    </div>
                </div>

                <!-- Team 3 -->
                <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div class="overflow-hidden rounded-2xl mb-4 shadow-lg h-56 lg:h-64 relative">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=500&q=80" alt="Team Member" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-bold text-lg md:text-xl">Gerald Dwight Andigha C.</h3>
                    <p class="text-primary font-medium text-xs md:text-sm mb-2">Back-End Developer & Automation Engineer</p>
                    <p class="text-gray-500 text-xs md:text-sm px-2 mb-3">Membangun sistem yang stabil, terintegrasi, dan mudah dikembangkan agar setiap website mampu mendukung pertumbuhan bisnis dalam jangka panjang.</p>
                    <div class="flex justify-center items-center space-x-4 text-xs md:text-sm font-semibold">
                        <a href="#" class="text-primary hover:text-teal-700 transition-colors hover:underline underline-offset-4">View Profile</a>
                        <a href="#" class="text-primary hover:text-teal-700 transition-colors hover:underline underline-offset-4">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Visi Kami Section -->
    <section class="w-full min-h-screen flex flex-col justify-center items-center bg-gray-50 pt-20 pb-12">
        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 mb-6 md:mb-8">
            <h2 class="text-sm md:text-base font-bold text-gray-500 uppercase tracking-widest mb-3" data-aos="fade-right">Visi Kami</h2>
            <h3 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-gray-900 leading-tight max-w-4xl" data-aos="fade-up">
                Menjadi Digital Studio yang menghadirkan solusi digital berpusat pada pengguna dan berdampak bagi setiap bisnis.
            </h3>
        </div>
        <div class="w-full overflow-hidden shadow-2xl h-[400px] md:h-[520px] lg:h-[620px]" data-aos="zoom-in">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1600&q=80" alt="Workspace" class="w-full h-full object-cover">
        </div>
    </section>

    <!-- 7. Misi Kami Section -->
    <section class="w-full min-h-screen flex flex-col justify-center items-center bg-white pt-20 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto w-full">
            <div class="text-right mb-6 md:mb-8" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold">Misi Kami</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div data-aos="fade-up" data-aos-delay="0">
                    <img src="image about/Rectangle 30.png" alt="Rectangle 30" class="rounded-xl w-full h-[360px] md:h-[460px] lg:h-[540px] object-cover mb-4 shadow-md">
                    <h3 class="font-bold text-lg md:text-xl mb-2">Membangun Kepercayaan</h3>
                    <p class="text-gray-500 text-xs md:text-sm">Merancang pengalaman digital yang membangun rasa percaya dari pengalaman pelanggan, bukan hanya sekedar website</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <img src="image about/Rectangle 31.png" alt="Rectangle 31" class="rounded-xl w-full h-[360px] md:h-[460px] lg:h-[540px] object-cover mb-4 shadow-md">
                    <h3 class="font-bold text-lg md:text-xl mb-2">Pengalaman yang Bermakna</h3>
                    <p class="text-gray-500 text-xs md:text-sm">Membantu bisnis memahami bahwa digital yang baik diukur melalui desain yang jelas, familiar, dan mudah digunakan.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <img src="image about/Rectangle 32.png" alt="Rectangle 32" class="rounded-xl w-full h-[360px] md:h-[460px] lg:h-[540px] object-cover mb-4 shadow-md">
                    <h3 class="font-bold text-lg md:text-xl mb-2">Growing Together</h3>
                    <p class="text-gray-500 text-xs md:text-sm">Mendampingi setiap langkah transformasi digital dengan proses yang sederhana, kolaboratif, dan mudah dipahami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. CTA Section -->
    <section class="w-full min-h-screen flex flex-col justify-center bg-white overflow-hidden">
        <div class="w-full bg-[#D4F6FF] py-20 md:py-24 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center" data-aos="zoom-in">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Saatnya Bisnis Anda Tampil Lebih Profesional.</h2>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="bg-primary text-white px-10 py-4 rounded-full text-lg font-semibold hover:bg-teal-700 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">Konsultasi</a>
                    <a href="#" class="bg-white text-gray-900 border border-gray-200 px-10 py-4 rounded-full text-lg font-semibold hover:bg-gray-50 transition shadow-sm hover:shadow transform hover:-translate-y-1">Pesan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Footer Placeholder -->
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
                const currentPage = window.location.pathname.split('/').pop() || 'about.html';
                document.querySelectorAll('#navbar-placeholder a').forEach(link => {
                    link.classList.remove('text-primary');
                    link.classList.add('text-gray-500');

                    const href = link.getAttribute('href');
                    const text = link.textContent.trim();
                    if (currentPage === 'about.html' && text === 'Tentang Kami') {
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
    <script src="component/about.js"></script>
</body>
</html>
