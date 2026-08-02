@extends('layouts.frontend')

@section('title', 'Tentang Kami - Snowy Digital Agency')

@push('styles')
    <!-- Konfigurasi Tailwind Custom Anda -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        primary: '#0D7B8A', // Teal color for buttons
                        secondary: '#D4F6FF',
                    }
                }
            }
        }
    </script>
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('component/about.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="pt-28 pb-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto min-h-screen flex items-center overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.8fr_1fr] gap-6 items-center w-full">

            <!-- Left Images: 4 foto ke bawah, foto 2&4 maju ke kanan -->
            <div class="hidden lg:flex flex-col gap-3" data-aos="fade-right" data-aos-duration="900">
                <div class="rounded-2xl overflow-hidden h-40 img-container shadow-lg">
                    <img src="{{ asset('assets/frontend/image about/Rectangle 22.png') }}" alt="Rectangle 22" class="w-full h-full object-cover img-hover">
                </div>
                <div class="rounded-2xl overflow-hidden h-48 img-container shadow-lg ml-5">
                    <img src="{{ asset('assets/frontend/image about/Rectangle 23.png') }}" alt="Rectangle 23" class="w-full h-full object-cover img-hover">
                </div>
                <div class="rounded-2xl overflow-hidden h-36 img-container shadow-lg">
                    <img src="{{ asset('assets/frontend/image about/Rectangle 24.png') }}" alt="Rectangle 24" class="w-full h-full object-cover img-hover">
                </div>
                <div class="rounded-2xl overflow-hidden h-44 img-container shadow-lg ml-5">
                    <img src="{{ asset('assets/frontend/image about/Rectangle 25.png') }}" alt="Rectangle 25" class="w-full h-full object-cover img-hover">
                </div>
            </div>

            <!-- Center Text -->
            <div class="text-center z-10 px-4" data-aos="fade-up" data-aos-delay="150">
                <h1 class="text-4xl md:text-5xl lg:text-[3rem] font-extrabold text-gray-900 leading-snug mb-6">
                    Membantu Bisnis<br>
                    Membangun Kepercayaan Secara Digital<br> 
                </h1>
                <p class="text-lg text-gray-500 max-w-lg mx-auto mb-8">
                    Lebih dari sekadar agensi, kami adalah mitra strategis Anda dalam merancang pengalaman digital yang memukau, fungsional, dan relevan dengan audiens Anda.
                </p>
            </div>

            <!-- Right Images: 4 foto ke bawah, foto 1&3 maju ke kiri -->
            <div class="hidden lg:flex flex-col gap-3" data-aos="fade-left" data-aos-duration="900">
                <div class="rounded-2xl overflow-hidden h-48 img-container shadow-lg mr-5">
                    <img src="{{ asset('assets/frontend/image about/Rectangle 26.png') }}" alt="Rectangle 26" class="w-full h-full object-cover img-hover">
                </div>
                <div class="rounded-2xl overflow-hidden h-36 img-container shadow-lg">
                    <img src="{{ asset('assets/frontend/image about/Rectangle 27.png') }}" alt="Rectangle 27" class="w-full h-full object-fill img-hover">
                </div>
                <div class="rounded-2xl overflow-hidden h-44 img-container shadow-lg mr-5">
                    <img src="{{ asset('assets/frontend/image about/Rectangle 28.png') }}" alt="Rectangle 28" class="w-full h-full object-cover img-hover">
                </div>
                <div class="rounded-2xl overflow-hidden h-40 img-container shadow-lg">
                    <img src="{{ asset('assets/frontend/image about/Rectangle 29.png') }}" alt="Rectangle 29" class="w-full h-full object-fill img-hover">
                </div>
            </div>

        </div>
    </section>

    <!-- Apa itu Snowy Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-8">Apa Itu Snowy?</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Snowy adalah studio kreatif digital yang berfokus pada desain antarmuka, pengembangan produk, dan strategi digital. Kami menggabungkan estetika desain dengan fungsionalitas teknologi untuk menghasilkan karya yang tidak hanya indah dilihat, tetapi juga memberikan dampak bisnis yang nyata.
            </p>
        </div>
    </section>

    <!-- Perjalanan Kami Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-16" data-aos="fade-up">Perjalanan Kami</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="0">
                    <div class="overflow-hidden rounded-xl mb-5 h-64">
                        <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?w=500&q=80" alt="Awal Mula" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <h3 class="font-extrabold text-xl mb-1">Awal Perjalanan</h3>
                    <p class="text-xs font-semibold text-primary mb-3 flex items-center gap-1.5">
                        Mei 2026
                    </p>
                    <p class="text-gray-500 text-sm leading-relaxed">Snowy lahir saat kami membangun website untuk bisnis keluarga. Dari sana, kami melihat bahwa banyak bisnis belum memiliki pengalaman digital yang benar-benar mencerminkan kualitas mereka.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="overflow-hidden rounded-xl mb-5 h-64">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&q=80" alt="Ekspansi" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <h3 class="font-extrabold text-xl mb-1">Melihat Peluang</h3>
                    <p class="text-xs font-semibold text-primary mb-3 flex items-center gap-1.5">
                        Juni 2026
                    </p>
                    <p class="text-gray-500 text-sm leading-relaxed">Kami menemukan banyak website yang hanya sekadar hadir secara online, tanpa identitas yang kuat maupun strategi jangka panjang. Kami percaya digital seharusnya membangun kepercayaan, bukan hanya keberadaan.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="overflow-hidden rounded-xl mb-5 h-64">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=500&q=80" alt="Penghargaan" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <h3 class="font-extrabold text-xl mb-1">Membangun Snowy</h3>
                    <p class="text-xs font-semibold text-primary mb-3 flex items-center gap-1.5">
                        Juli 2026
                    </p>
                    <p class="text-gray-500 text-sm leading-relaxed">Snowy lahir saat kami membangun website untuk bisnis keluarga. Dari sana, kami melihat bahwa banyak bisnis belum memiliki pengalaman digital yang benar-benar mencerminkan kualitas mereka.</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="overflow-hidden rounded-xl mb-5 h-64">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500&q=80" alt="Masa Depan" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <h3 class="font-extrabold text-xl mb-1">Terus Berkembang</h3>
                    <p class="text-xs font-semibold text-primary mb-3 flex items-center gap-1.5">
                        Hari Ini
                    </p>
                    <p class="text-gray-500 text-sm leading-relaxed">Hari ini, Snowy membantu bisnis membangun kepercayaan melalui website yang modern, mudah digunakan, dan dirancang untuk bertumbuh bersama bisnis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Makna di Balik Snowy Section -->
    <section class="pt-20 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">
            <h2 class="text-3xl font-bold text-gray-900" data-aos="fade-up">Makna di Balik Snowy</h2>
        </div>
        
        <!-- Background Banner Salju -->
        <div class="relative bg-slate-900 text-white overflow-hidden min-h-[640px]">
            <!-- Background Image Overlay -->
            <div class="absolute inset-0 opacity-70">
                <img src="{{ asset('assets/frontend/image about/background salju.png') }}" alt="Snow Background" class="w-full h-full object-cover">
            </div>
            
            <div class="relative max-w-7xl mx-auto px-6 sm:px-8 lg:px-8 py-20 pb-28 z-10">
                <!-- Logo Solo Snowy di Kiri Atas -->
                <div class="mb-10" data-aos="fade-right">
                    <img src="{{ asset('assets/frontend/image about/Logo solo snowy.png') }}" alt="Snowy Logo" class="h-24 md:h-28 w-auto object-contain">
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 items-start">
                    <!-- Teks Kiri (Snowy terinspirasi...) -->
                    <div data-aos="fade-up" class="max-w-lg">
                        <p class="text-white text-base md:text-lg leading-relaxed font-normal">
                            Snowy terinspirasi dari keunikan setiap kepingan salju. Tidak ada dua kepingan yang benar-benar sama, sebagaimana tidak ada dua bisnis yang memiliki tantangan yang sama. Karena itu, kami percaya setiap proyek membutuhkan riset, pendekatan, dan solusi yang dirancang secara khusus sesuai dengan kebutuhan masing-masing bisnis.
                        </p>
                    </div>
                    
                    <!-- Teks Kanan (Logo Snowy mengambil bentuk..., Diturunkan Posisinya) -->
                    <div data-aos="fade-up" data-aos-delay="150" class="max-w-lg md:mt-28">
                        <p class="text-white text-base md:text-lg leading-relaxed font-normal">
                            Logo Snowy mengambil bentuk aliran salju (snow flow) yang melambangkan perjalanan setiap proyek. Kami percaya solusi terbaik tidak lahir secara instan, tetapi melalui proses memahami, merancang, dan menyempurnakan setiap detail hingga memberikan dampak nyata bagi bisnis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Siapa Kami Section (Team) -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-right mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold">Siapa Kami</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Team 1 -->
                <div class="text-center group" data-aos="fade-up" data-aos-delay="0">
                    <div class="overflow-hidden rounded-2xl mb-6 shadow-lg h-96 relative">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=500&q=80" alt="Team Member" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="font-bold text-xl">Syahrul Ferdiansyah</h3>
                    <p class="text-primary font-medium text-sm mb-4">Founder & Creative Direction</p>
                    <p class="text-gray-500 text-sm px-4 mb-4">Memimpin arah kreatif Snowy, memastikan setiap proyek memiliki strategi yang jelas, pengalaman pengguna yang bermakna, dan desain yang membangun kepercayaan.</p>
                    <div class="flex justify-center space-x-4 text-gray-400">
                        <a href="#" class="hover:text-primary transition"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="hover:text-primary transition"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                
                <!-- Team 2 -->
                <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                    <div class="overflow-hidden rounded-2xl mb-6 shadow-lg h-96 relative">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&q=80" alt="Team Member" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="font-bold text-xl">Areif Selay</h3>
                    <p class="text-primary font-medium text-sm mb-4">Lead UI/UX Designe & Frontend Developer</p>
                    <p class="text-gray-500 text-sm px-4 mb-4">Menerjemahkan strategi menjadi antarmuka yang modern, intuitif, dan responsif untuk menghadirkan pengalaman digital yang nyaman digunakan.</p>
                    <div class="flex justify-center space-x-4 text-gray-400">
                        <a href="#" class="hover:text-primary transition"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="hover:text-primary transition"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>

                <!-- Team 3 -->
                <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div class="overflow-hidden rounded-2xl mb-6 shadow-lg h-96 relative">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=500&q=80" alt="Team Member" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="font-bold text-xl">Gerald Dwight Andigha C.</h3>
                    <p class="text-primary font-medium text-sm mb-4">Back-End Developer & Automation Engineer</p>
                    <p class="text-gray-500 text-sm px-4 mb-4">Membangun sistem yang stabil, terintegrasi, dan mudah dikembangkan agar setiap website mampu mendukung pertumbuhan bisnis dalam jangka panjang.</p>
                    <div class="flex justify-center space-x-4 text-gray-400">
                        <a href="#" class="hover:text-primary transition"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="hover:text-primary transition"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Kami Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-lg font-bold text-gray-500 uppercase tracking-widest mb-6" data-aos="fade-right">Visi Kami</h2>
            <h3 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight max-w-4xl mb-12" data-aos="fade-up">
                Menjadi Digital Studio yang menghadirkan solusi digital berpusat pada pengguna dan berdampak bagi setiap bisnis.
            </h3>
            <div class="rounded-3xl overflow-hidden shadow-2xl h-[500px]" data-aos="zoom-in">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1200&q=80" alt="Workspace" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- Misi Kami Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-right mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold">Misi Kami</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div data-aos="fade-up" data-aos-delay="0">
                    <img src="{{ asset('assets/frontend/image about/Rectangle 30.png') }}" alt="Rectangle 30" class="rounded-xl w-full h-72 object-cover mb-6 shadow-md">
                    <h3 class="font-bold text-xl mb-3">Membangun Kepercayaan</h3>
                    <p class="text-gray-500">Merancang pengalaman digital yang membangun rasa percaya dari pengalaman pelanggan, bukan hanya sekedar website</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/frontend/image about/Rectangle 31.png') }}" alt="Rectangle 31" class="rounded-xl w-full h-72 object-cover mb-6 shadow-md">
                    <h3 class="font-bold text-xl mb-3">Pengalaman yang Bermakna</h3>
                    <p class="text-gray-500">Membantu bisnis memahami bahwa digital yang baik diukur melalui desain yang jelas, familiar, dan mudah digunakan.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/frontend/image about/Rectangle 32.png') }}" alt="Rectangle 32" class="rounded-xl w-full h-72 object-cover mb-6 shadow-md">
                    <h3 class="font-bold text-xl mb-3">Growing Together</h3>
                    <p class="text-gray-500">Mendampingi setiap langkah transformasi digital dengan proses yang sederhana, kolaboratif, dan mudah dipahami.</p>
                </div>
            </div>
        </div>
    </section>

<!-- ==========================================
         SECTION 12: FINAL CTA (Dipanggil dari Partials)
         ========================================== -->
    @include('partials.cta')
@endsection

@push('scripts')
    <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS bawaan dari HTML Anda
        AOS.init();
    </script>
    
    <!-- Custom JS -->
    <script src="{{ asset('component/about.js') }}"></script>
@endpush