@extends('layouts.frontend')

@section('title', 'Snowy Digital Agency - Bangun Bisnis yang Dipercaya')

@push('styles')
    <!-- Tailwind CSS Config -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'snowy-primary': '#00758f',
              'snowy-primary-hover': '#005f74',
              'snowy-light': '#e6f8fc',
              'snowy-dark': '#1a1a1a',
              'snowy-gray': '#666666',
              'snowy-bundle-light': '#f0f9ff',
            },
            fontFamily: {
              sans: ['Inter', 'sans-serif'],
            }
          }
        }
      }
    </script>

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom Style Khusus Halaman Index -->
    <style>
        /* Menyembunyikan scrollbar untuk carousel Section 4 */
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        /* Custom Grid Hero Section */
        .hero-grid {
            display: grid;
            grid-template-columns: 1fr;
            align-items: center;
            min-height: 85vh; 
        }

        @media (min-width: 1024px) {
            .hero-grid {
                grid-template-columns: 1.1fr 0.9fr; 
                gap: 20px;
            }
        }

        .hero-image-col {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: flex-end; 
            justify-content: flex-end; 
            pointer-events: none; 
        }

        .hero-snowy-img {
            width: 130%; 
            max-width: none;
            transform: translate(30%, 2rem); 
            object-position: bottom right; 
            object-fit: contain;
            image-rendering: -webkit-optimize-contrast;
            image-rendering: high-quality;
        }

        @media (min-width: 1536px) {
            .hero-snowy-img {
                width: 115%;
                transform: translate(20%, 2rem); 
            }
        }
    </style>
@endpush

@section('content')

<!-- ==========================================
     SECTION 1: HERO
     ========================================== -->
<section class="bg-gradient-to-b from-snowy-light via-snowy-light to-white overflow-hidden w-full relative pt-28 pb-16 lg:pt-0 lg:pb-0">
    
    <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full">
        <div class="hero-grid">
            
            <!-- KOLOM 1: TEKS -->
            <div class="hero-text-col relative z-10 py-20 lg:py-10">
                <h1 class="text-5xl lg:text-6xl xl:text-[4.5rem] font-bold text-snowy-dark leading-[1.15] tracking-tight mb-6" data-aos="fade-up" data-aos-duration="1000">
                    Bangun Bisnis yang <br> Dipercaya.
                </h1>
                <p class="text-lg lg:text-xl text-gray-500 max-w-[90%] xl:max-w-[85%] leading-relaxed font-medium mb-10" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                    Kami merancang identitas dan pengalaman digital yang membantu bisnis tampil profesional, membangun kepercayaan, dan siap berkembang.
                </p>
                <div class="flex flex-wrap gap-4 items-center mb-8" data-aos="fade-up" data-aos-delay="300">
                    <a href="#konsultasi" class="bg-snowy-primary hover:bg-snowy-primary-hover text-white px-8 py-3.5 rounded-full font-semibold text-lg transition-all">
                        Konsultasi Gratis
                    </a>
                    <a href="#portfolio" class="bg-white text-snowy-dark hover:bg-gray-50 px-8 py-3.5 rounded-full font-semibold text-lg transition-all border border-gray-100 shadow-sm">
                        Proyek Snowy
                    </a>
                </div>
                <div class="text-sm lg:text-base text-gray-500 font-medium flex flex-wrap gap-2 items-center" data-aos="fade-in" data-aos-delay="500">
                    Dipahami <span class="text-gray-400 px-1">|</span> Dirancang <span class="text-gray-400 px-1">|</span> Dikembangkan <span class="text-gray-400 px-1">|</span> Bertumbuh
                </div>
            </div>

            <!-- KOLOM 2: GAMBAR SNOWY -->
            <div class="hero-image-col hidden lg:flex" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <img src="{{ asset('assets/frontend/img/snowy.svg') }}" alt="Snowy Background" class="hero-snowy-img">
            </div>

        </div>
    </div>

    <!-- Background Shape Khusus HP -->
    <img src="{{ asset('assets/frontend/img/snowy.svg') }}" class="absolute -right-20 bottom-0 w-[120%] opacity-30 lg:hidden pointer-events-none z-0" alt="Snowy Shape" data-aos="fade-in" data-aos-duration="1500">

</section>

<!-- ==========================================
     SECTION 2: INTRO
     ========================================== -->
<section class="py-24 px-6 bg-white flex flex-col justify-center items-center text-center">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl lg:text-5xl font-bold text-snowy-dark mb-6 tracking-tight" data-aos="fade-up">
            Setiap Bisnis Berhak Tampil Professional
        </h2>
        <p class="text-xl lg:text-3xl text-gray-500 leading-snug font-medium" data-aos="fade-up" data-aos-delay="150">
            Setiap bisnis layak memiliki identitas digital yang profesional, strategis, dan mampu membangun kepercayaan.
        </p>
    </div>
</section>

<!-- ==========================================
     SECTION 3: PROBLEM GRID
     ========================================== -->
<section class="py-16 px-6 max-w-7xl mx-auto">
    <div class="text-center mb-12" data-aos="fade-up">
        <p class="text-snowy-primary font-semibold mb-2">Apa masalah ini terdengar familiar?</p>
        <h2 class="text-4xl font-bold text-snowy-dark">Kami sangat bisa membantu</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Card 1 -->
        <div class="relative rounded-2xl overflow-hidden aspect-[4/3] group" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('assets/frontend/img/problem-1.png') }}" alt="Landing Page" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end p-8 text-center">
                <h3 class="text-white text-3xl font-bold mb-3">Landing Page</h3>
                <p class="text-gray-200 text-sm mb-6 max-w-md mx-auto">Mungkin masalahnya bukan pada produk, tetapi cara Anda menyampaikannya.</p>
                <div class="flex gap-3 justify-center">
                    <button class="bg-blue-400 hover:bg-blue-500 text-white px-6 py-2 rounded-lg font-medium text-sm transition-colors">Konsultasi</button>
                    <button class="bg-white hover:bg-gray-100 text-snowy-dark px-6 py-2 rounded-lg font-medium text-sm transition-colors">Lihat Detail</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="relative rounded-2xl overflow-hidden aspect-[4/3] group" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/frontend/img/problem-2.png') }}" alt="Brand Identity Design" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end p-8 text-center">
                <h3 class="text-white text-3xl font-bold mb-3">Brand Identity Design</h3>
                <p class="text-gray-200 text-sm mb-6 max-w-md mx-auto">Identitas visual konsisten membantu bisnis lebih dipercaya, dan diingat pelanggan.</p>
                <div class="flex gap-3 justify-center">
                    <button class="bg-blue-400 hover:bg-blue-500 text-white px-6 py-2 rounded-lg font-medium text-sm transition-colors">Konsultasi</button>
                    <button class="bg-white hover:bg-gray-100 text-snowy-dark px-6 py-2 rounded-lg font-medium text-sm transition-colors">Lihat Detail</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="relative rounded-2xl overflow-hidden aspect-[4/3] group" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('assets/frontend/img/problem-3.png') }}" alt="Company Profile" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end p-8 text-center">
                <h3 class="text-white text-3xl font-bold mb-3">Company Profile</h3>
                <p class="text-gray-200 text-sm mb-6 max-w-md mx-auto">Pengelolaan data, pendaftaran, arsip, dan laporan lebih mudah sesuai kebutuhan anda.</p>
                <div class="flex gap-3 justify-center">
                    <button class="bg-blue-400 hover:bg-blue-500 text-white px-6 py-2 rounded-lg font-medium text-sm transition-colors">Konsultasi</button>
                    <button class="bg-white hover:bg-gray-100 text-snowy-dark px-6 py-2 rounded-lg font-medium text-sm transition-colors">Lihat Detail</button>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="relative rounded-2xl overflow-hidden aspect-[4/3] group" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('assets/frontend/img/problem-4.png') }}" alt="Custom Website" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end p-8 text-center">
                <h3 class="text-white text-3xl font-bold mb-3">Custom Website</h3>
                <p class="text-gray-200 text-sm mb-6 max-w-md mx-auto">Kami membangun website dan sistem yang disesuaikan dengan kebutuhan bisnis, mulai dari reservasi hingga e-commerce.</p>
                <div class="flex gap-3 justify-center">
                    <button class="bg-blue-400 hover:bg-blue-500 text-white px-6 py-2 rounded-lg font-medium text-sm transition-colors">Konsultasi</button>
                    <button class="bg-white hover:bg-gray-100 text-snowy-dark px-6 py-2 rounded-lg font-medium text-sm transition-colors">Lihat Detail</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 4: SERVICES CAROUSEL
     ========================================== -->
<section class="py-20 px-6 max-w-7xl mx-auto overflow-hidden">
    <div class="text-center mb-10" data-aos="fade-up">
        <p class="text-snowy-primary font-semibold mb-2">Layanan Kami</p>
        <h2 class="text-4xl font-bold text-snowy-dark">Solusi yang dirancang untuk anda</h2>
    </div>

    <!-- Carousel Container -->
    <div class="relative" data-aos="zoom-in" data-aos-delay="200">
        <div id="serviceCarousel" class="flex gap-6 overflow-x-auto snap-x snap-mandatory hide-scrollbar pb-8 cursor-grab">
            
            <!-- Slide 1 -->
            <div class="snap-center shrink-0 w-[95%] md:w-[80%] lg:w-[950px] relative rounded-3xl overflow-hidden aspect-[16/9] select-none">
                <img src="{{ asset('assets/frontend/img/service-1.png') }}" class="absolute inset-0 w-full h-full object-cover pointer-events-none">
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/20 p-10 lg:p-14 flex flex-col justify-center">
                    <span class="text-white text-6xl lg:text-7xl font-light mb-4">01</span>
                    <h3 class="text-white text-4xl lg:text-5xl font-bold mb-4 max-w-lg">Bangun Kesan Pertama</h3>
                    <p class="text-gray-200 text-lg lg:text-xl max-w-lg">Website dan identitas digital yang membuat bisnis Anda lebih dipercaya sejak pertemuan pertama.</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="snap-center shrink-0 w-[95%] md:w-[80%] lg:w-[950px] relative rounded-3xl overflow-hidden aspect-[16/9] select-none">
                <img src="{{ asset('assets/frontend/img/service-2.jpg') }}" class="absolute inset-0 w-full h-full object-cover pointer-events-none">
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/20 p-10 lg:p-14 flex flex-col justify-center">
                    <span class="text-white text-6xl lg:text-7xl font-light mb-4">02</span>
                    <h3 class="text-white text-4xl lg:text-5xl font-bold mb-4 max-w-lg">Sistem Operasional</h3>
                    <p class="text-gray-200 text-lg lg:text-xl max-w-lg">Desain UI/UX dan pengembangan sistem untuk mempermudah pekerjaan internal Anda.</p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 5: AI INTEGRATION
     ========================================== -->
<section class="py-28 px-6 relative max-w-5xl mx-auto flex flex-col items-center text-center">
    
    <!-- ================= DEKORASI ATAS ================= -->
    <!-- Perbaikan: Menggunakan w-full dan flex justify-center agar dijamin pas di tengah -->
    <div class="absolute -top-4 left-0 w-full flex justify-center" data-aos="fade-down" data-aos-delay="200">
        <img src="{{ asset('assets/frontend/img/ChatGPT.png') }}" class="h-16 md:h-20 opacity-30 object-contain pointer-events-none" alt="Deco Center">
    </div>
    
    <div class="absolute top-16 left-4 md:left-20" data-aos="fade-down" data-aos-delay="400">
        <img src="{{ asset('assets/frontend/img/claude.png') }}" class="h-16 md:h-20 opacity-30 object-contain pointer-events-none" alt="Deco Left">
    </div>
    
    <div class="absolute top-16 right-4 md:right-20" data-aos="fade-down" data-aos-delay="600">
        <img src="{{ asset('assets/frontend/img/perplexity.png') }}" class="h-16 md:h-20 opacity-30 object-contain pointer-events-none" alt="Deco Right">
    </div>

    <!-- ================= KONTEN UTAMA ================= -->
    <h2 class="text-4xl md:text-5xl font-bold text-snowy-dark mb-6 mt-16 relative z-10 leading-tight" data-aos="fade-up">
        Dibuat oleh Manusia.<br>Disempurnakan dengan <span class="text-blue-600">AI</span>.
    </h2>
    <p class="text-gray-500 text-lg md:text-xl leading-relaxed mb-20 max-w-2xl relative z-10" data-aos="fade-up" data-aos-delay="150">
        AI membantu kami melakukan riset, eksplorasi, dan validasi lebih cepat sehingga kami dapat lebih fokus pada strategi, kreativitas, dan pengalaman pengguna.
    </p>
    
<!-- ================= LOGO BAWAH ================= -->
    <div class="relative w-full max-w-3xl mx-auto">
        <div class="flex justify-between items-center px-2 md:px-10 mb-12">
            <!-- Dikembalikan menjadi abu-abu (grayscale) agar senada dengan atas -->
            <img src="{{ asset('assets/frontend/img/notion.png') }}" alt="Notion" class="h-16 md:h-24 w-auto object-contain grayscale opacity-40">
            
            <img src="{{ asset('assets/frontend/img/gemini.png') }}" alt="Gemini" class="h-16 md:h-24 w-auto object-contain grayscale opacity-40">
        </div>
        
        <div class="flex justify-center mt-4" data-aos="fade-up" data-aos-delay="400">
            <!-- Figma juga dikembalikan menjadi abu-abu -->
            <img src="{{ asset('assets/frontend/img/figma.png') }}" alt="Figma" class="h-16 md:h-20 w-auto object-contain grayscale opacity-40">
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 6: PRICING BUNDLES
     ========================================== -->
<section class="py-20 bg-gray-50 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-end mb-10" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-snowy-dark max-w-md">Pilih Bundle Sesuai Apa Yang Dibutuhkan</h2>
            <a href="#" class="text-snowy-primary font-medium hover:underline hidden sm:block">Lihat rincian</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 relative">
            
            <!-- Bundle 1 -->
            <div class="bg-white rounded-3xl p-8 lg:p-10 border-2 border-blue-100 hover:shadow-xl transition-shadow" data-aos="fade-right" data-aos-delay="100">
                <h3 class="text-3xl font-bold text-snowy-dark mb-2">Business Presence</h3>
                <p class="text-gray-600 mb-8 font-medium">Untuk bisnis yang mulai membangun kepercayaan.</p>
                
                <p class="font-bold text-sm mb-4">What's Include?</p>
                <ul class="space-y-3 mb-8 text-gray-600 text-sm">
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Konsultasi Awal</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Analisis Brand</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Arah Visual Brand</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Company Profile Premium</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Brand Guideline</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Desain Custom</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> 2-3 Minggu</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> 3x Revisi</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> 30 Hari Bug Support</li>
                </ul>

                <div class="border-t pt-6">
                    <p class="font-bold text-sm mb-1">Brand Identity + Company Profile</p>
                    <p class="text-blue-500 text-sm font-medium mb-3">3.500.000 + 7.500.000</p>
                    <p class="text-gray-400 line-through text-lg font-bold">Rp.11.000.000</p>
                    <p class="text-gray-500 line-through text-xl font-bold mb-2">Rp.9.900.000 <span class="text-sm font-normal text-blue-500">(harga bundle)</span></p>
                    
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-purple-600 text-white text-xs px-3 py-1 rounded-full font-semibold flex items-center gap-1">🚀 Launching Promo</span>
                    </div>
                    <p class="text-5xl font-bold text-snowy-primary mb-6">Rp.8.900.000</p>
                    
                    <button class="w-full bg-blue-400 hover:bg-blue-500 text-white py-4 rounded-xl font-bold text-lg transition-colors">Konsultasi</button>
                </div>
            </div>

            <!-- Bundle 2 (Featured) -->
            <div class="bg-white rounded-3xl p-8 lg:p-10 border-2 border-blue-300 shadow-xl relative" data-aos="fade-left" data-aos-delay="200">
                <!-- Badge Miring -->
                <div class="absolute -top-5 -right-6 lg:-right-10 bg-purple-700 text-white px-6 py-2 font-bold rotate-6 rounded-md shadow-lg z-10 text-lg">
                    Paling Disarankan
                </div>

                <h3 class="text-3xl font-bold text-snowy-dark mb-2">Business Growth</h3>
                <p class="text-gray-600 mb-8 font-medium">Untuk bisnis yang ingin meningkatkan efisiensi.</p>
                
                <p class="font-bold text-sm mb-4">What's Include?</p>
                <ul class="space-y-3 mb-8 text-gray-600 text-sm">
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Konsultasi Awal</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Analisis Brand</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Logo & Identitas Visual Brand</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Company Profile Premium</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Landing Page Responsif</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> Optimasi SEO Dasar</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> 4 - 5 Minggu</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> 3x Revisi</li>
                    <li class="flex items-center gap-2"><span class="text-blue-500">✓</span> 30 Hari Bug Support</li>
                </ul>

                <div class="border-t pt-6">
                    <p class="font-bold text-sm mb-1">Brand Identity + Landing Page + Company Profile</p>
                    <p class="text-blue-500 text-sm font-medium mb-3">3.500.000 + 5.000.000 + 7.500.000</p>
                    <p class="text-gray-400 line-through text-lg font-bold">Rp.12.500.000</p>
                    <p class="text-gray-500 line-through text-xl font-bold mb-2">Rp.11.250.000 <span class="text-sm font-normal text-blue-500">(harga bundle)</span></p>
                    
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-purple-600 text-white text-xs px-3 py-1 rounded-full font-semibold flex items-center gap-1">🚀 Launching Promo</span>
                    </div>
                    <p class="text-5xl font-bold text-snowy-primary mb-6">Rp.9.990.000</p>
                    
                    <button class="w-full bg-blue-400 hover:bg-blue-500 text-white py-4 rounded-xl font-bold text-lg transition-colors">Konsultasi</button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 7: WORKFLOW
     ========================================== -->
<section class="py-20 px-6 max-w-7xl mx-auto overflow-hidden">
    <div class="text-center mb-16" data-aos="fade-up">
        <p class="text-snowy-primary font-semibold mb-2">Cara kami bekerja</p>
        <h2 class="text-4xl font-bold text-snowy-dark">Pendekatan yang lebih terstruktur</h2>
    </div>

    <!-- Grid Layout Utama -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- KOLOM 1 -->
        <div class="flex flex-col relative" data-aos="fade-up" data-aos-delay="100">
            <div>
                <img src="{{ asset('assets/frontend/img/discovery.jpg') }}" class="rounded-2xl w-full aspect-[16/10] object-cover mb-6 shadow-sm">
                <div class="pr-2 min-h-[120px]">
                    <h3 class="text-2xl font-bold text-snowy-dark flex items-center gap-3">
                        <span class="text-4xl font-bold tracking-tight">01</span> Discovery
                    </h3>
                    <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                        Kami mendengarkan, memahami bisnis anda dan tujuan yang ingin dicapai
                    </p>
                </div>
            </div>
            
            <div class="relative h-12 flex items-center w-full z-10 my-4 md:my-0">
                <div class="absolute left-0 w-[calc(100%+2rem)] h-1 bg-snowy-primary hidden md:block"></div>
                <div class="absolute left-0 w-full h-1 bg-snowy-primary md:hidden"></div>
                
                <div class="absolute left-0 w-4 h-4 bg-snowy-primary rounded-full border-[3px] border-white box-content shadow-sm"></div>
                <div class="absolute left-10 w-4 h-4 bg-snowy-primary rounded-full border-[3px] border-white box-content shadow-sm"></div>
            </div>

            <div class="pl-12 flex flex-col justify-end mt-4 md:mt-0">
                <div class="pr-2 min-h-[120px]">
                    <h3 class="text-2xl font-bold text-snowy-dark flex items-center gap-3">
                        <span class="text-4xl font-bold tracking-tight">02</span> Strategy
                    </h3>
                    <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                        Kami menganalisis data dan strategi yang tepat untuk menjawab kebutuhan bisnis anda
                    </p>
                </div>
                <img src="{{ asset('assets/frontend/img/strategy.jpg') }}" class="rounded-2xl w-full aspect-[16/10] object-cover mt-6 shadow-sm">
            </div>
        </div>

        <!-- KOLOM 2 -->
        <div class="flex flex-col relative" data-aos="fade-up" data-aos-delay="200">
            <div>
                <img src="{{ asset('assets/frontend/img/design.jpg') }}" class="rounded-2xl w-full aspect-[16/10] object-cover mb-6 shadow-sm">
                <div class="pr-2 min-h-[120px]">
                    <h3 class="text-2xl font-bold text-snowy-dark flex items-center gap-3">
                        <span class="text-4xl font-bold tracking-tight">03</span> Design
                    </h3>
                    <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                        Kami merancang struktur, alur, dan tampilan (UI/UX) yang menarik, intuitif dan sesuai dengan identitas brand anda
                    </p>
                </div>
            </div>
            
            <div class="relative h-12 flex items-center w-full z-10 my-4 md:my-0">
                <div class="absolute left-0 w-[calc(100%+2rem)] h-1 bg-snowy-primary hidden md:block"></div>
                <div class="absolute left-0 w-full h-1 bg-snowy-primary md:hidden"></div>
                
                <div class="absolute left-0 w-4 h-4 bg-snowy-primary rounded-full border-[3px] border-white box-content shadow-sm"></div>
                <div class="absolute left-10 w-4 h-4 bg-snowy-primary rounded-full border-[3px] border-white box-content shadow-sm"></div>
            </div>

            <div class="pl-12 flex flex-col justify-end mt-4 md:mt-0">
                <div class="pr-2 min-h-[120px]">
                    <h3 class="text-2xl font-bold text-snowy-dark flex items-center gap-3">
                        <span class="text-4xl font-bold tracking-tight">04</span> Development
                    </h3>
                    <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                        Kami membangun website dengan kode yang bersih, cepat, aman, dan responsif di semua perangkat
                    </p>
                </div>
                <img src="{{ asset('assets/frontend/img/development.jpg') }}" class="rounded-2xl w-full aspect-[16/10] object-cover mt-6 shadow-sm">
            </div>
        </div>

        <!-- KOLOM 3 -->
        <div class="flex flex-col relative" data-aos="fade-up" data-aos-delay="300">
            <div>
                <img src="{{ asset('assets/frontend/img/launch.jpg') }}" class="rounded-2xl w-full aspect-[16/10] object-cover mb-6 shadow-sm">
                <div class="pr-2 min-h-[120px]">
                    <h3 class="text-2xl font-bold text-snowy-dark flex items-center gap-3">
                        <span class="text-4xl font-bold tracking-tight">05</span> Launch
                    </h3>
                    <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                        Kami melakukan pengujian menyeluruh dan memastikan semua berjalan optimal sebelum resmi diluncurkan
                    </p>
                </div>
            </div>
            
            <div class="relative h-12 flex items-center w-full z-10 my-4 md:my-0">
                <div class="absolute left-0 w-full h-1 bg-snowy-primary"></div>
                <div class="absolute left-0 w-4 h-4 bg-snowy-primary rounded-full border-[3px] border-white box-content shadow-sm"></div>
                <div class="absolute left-10 w-4 h-4 bg-snowy-primary rounded-full border-[3px] border-white box-content shadow-sm"></div>
            </div>

            <div class="pl-12 flex flex-col justify-end mt-4 md:mt-0">
                <div class="pr-2 min-h-[120px]">
                    <h3 class="text-2xl font-bold text-snowy-dark flex items-center gap-3">
                        <span class="text-4xl font-bold tracking-tight">06</span> Grow Together
                    </h3>
                    <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                        Kami siap membantu website anda berkembang seiring pertumbuhan bisnis
                    </p>
                </div>
                <img src="{{ asset('assets/frontend/img/grow.jpg') }}" class="rounded-2xl w-full aspect-[16/10] object-cover mt-6 shadow-sm">
            </div>
        </div>

    </div>
</section>

<!-- ==========================================
     SECTION 8: CASE STUDY
     ========================================== -->
<section class="py-20 px-6 max-w-7xl mx-auto">
    <div class="text-right mb-10" data-aos="fade-up">
        <p class="text-snowy-primary font-semibold mb-2">Proyek Kami</p>
        <h2 class="text-4xl font-bold text-snowy-dark">Studi Kasus Pilihan</h2>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="relative rounded-3xl overflow-hidden aspect-[4/5] group" data-aos="fade-right">
            <img src="{{ asset('assets/frontend/img/studi kasus.jpg') }}" alt="Optik Dwitunggal" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent p-10 flex flex-col justify-end text-white">
                <p class="text-sm font-medium mb-1">Industry: Optik</p>
                <p class="text-sm font-medium mb-4">Services: Brand Identity, Landing Page, UI/UX</p>
                <h3 class="text-5xl font-bold mb-4">Optik<br>Dwitunggal</h3>
                <a href="#" class="text-sm font-medium hover:underline flex items-center gap-2">Lihat Selengkapnya &rarr;</a>
            </div>
        </div>

        <div class="space-y-10" data-aos="fade-left">
            <div>
                <h4 class="text-xl font-bold text-snowy-dark mb-3">Tantangan</h4>
                <p class="text-gray-500 leading-relaxed">Dwitunggal membutuhkan media promosi digital yang praktis untuk memperkenalkan layanan optiknya saat melayani pelanggan maupun mengikuti berbagai event.</p>
            </div>
            <div>
                <h4 class="text-xl font-bold text-snowy-dark mb-3">Pendekatan</h4>
                <p class="text-gray-500 leading-relaxed">Kami merancang logo, UI/UX, dan landing page sebagai pusat informasi digital yang dapat dibagikan melalui tautan atau QR Code.</p>
            </div>
            <div>
                <h4 class="text-xl font-bold text-snowy-dark mb-3">Hasil</h4>
                <p class="text-gray-500 leading-relaxed">Dwitunggal kini memiliki media promosi digital yang lebih profesional, mudah dibagikan, dan siap digunakan kapan pun tanpa perlu mencetak ulang materi promosi.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 9: ABOUT SNOWY
     ========================================== -->
<section class="py-20 px-6 max-w-5xl mx-auto border-t border-gray-100">
    <div class="text-center mb-10" data-aos="fade-up">
        <p class="text-snowy-primary font-semibold mb-2">Definisi</p>
        <h2 class="text-4xl font-bold text-snowy-dark">Apa itu Snowy?</h2>
    </div>
    
    <p class="text-center text-lg text-gray-600 leading-relaxed mb-16 max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="100">
        Snowy adalah <strong class="text-snowy-dark">strategic digital studio</strong> yang <strong class="text-snowy-dark">membantu bisnis, organisasi, dan personal brand</strong> membangun <strong class="text-snowy-dark">identitas serta solusi digital</strong> yang profesional, siap digunakan, dan siap bertumbuh. Kami percaya setiap solusi terbaik lahir dari pemahaman terhadap <strong class="text-snowy-dark">bisnis, pengguna, dan tujuan</strong> yang ingin dicapai.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12" data-aos="fade-up" data-aos-delay="200">
        <div class="space-y-4 text-sm font-medium text-gray-500">
            <div class="flex justify-between border-b pb-2"><span class="text-snowy-dark">2026</span> <span>Berdiri</span></div>
            <div class="flex justify-between border-b pb-2"><span class="text-snowy-dark">Indonesia</span> <span>Berlokasi</span></div>
            <div class="flex justify-between border-b pb-2"><span class="text-snowy-dark">Digital Product Studio</span> <span>Fokus</span></div>
        </div>
        
        <div>
            <h4 class="text-xl font-bold text-right text-snowy-dark mb-4">Metode</h4>
            <div class="flex flex-wrap gap-3 justify-end mb-6">
                <span class="border rounded-full px-4 py-1.5 text-sm text-gray-600">Berbasis Riset</span>
                <span class="border rounded-full px-4 py-1.5 text-sm text-gray-600">Fokus Pengguna</span>
                <span class="border rounded-full px-4 py-1.5 text-sm text-gray-600">Dibangun dari 0</span>
                <span class="border rounded-full px-4 py-1.5 text-sm text-gray-600">Sesuai Kebutuhan</span>
                <span class="border rounded-full px-4 py-1.5 text-sm text-gray-600">Professional</span>
            </div>
            <div class="text-right">
                <button class="bg-snowy-primary hover:bg-snowy-primary-hover text-white px-6 py-2 rounded-lg font-medium text-sm transition-colors">Lihat Detail</button>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 10: PRINCIPLES
     ========================================== -->
<section class="py-16 px-6 max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold text-snowy-dark mb-10" data-aos="fade-up">Prinsip yang Selalu Kami Pegang</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Principle 1 -->
        <div class="bg-gray-50 p-8 rounded-2xl" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </div>
            <h4 class="text-snowy-primary font-bold mb-3">Memahami Sebelum Merancang</h4>
            <p class="text-gray-500 text-sm leading-relaxed">Kami memahami kebutuhan Anda dahulu agar setiap keputusan memiliki tujuan yang jelas.</p>
        </div>
        
        <!-- Principle 2 -->
        <div class="bg-gray-50 p-8 rounded-2xl" data-aos="fade-up" data-aos-delay="200">
            <div class="mb-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 14v-2c0 -1.1 .9 -2 2 -2h.5l3.5 -3.5a1.5 1.5 0 1 1 2.1 2.1l-2.1 2.1h3.5a2 2 0 1 1 0 4h-2v1a2 2 0 1 1 -4 0v-1h-1.5z"/>
                    <path d="M14.5 15l-3.5 3.5a1.5 1.5 0 1 1 -2.1 -2.1l2.1 -2.1"/>
                    <path d="M10 11l-1.5 -1.5a1.5 1.5 0 1 0 -2.1 2.1l1.5 1.5"/>
                </svg>
            </div>
            <h4 class="text-snowy-primary font-bold mb-3">Solusi yang Sesuai Kebutuhan</h4>
            <p class="text-gray-500 text-sm leading-relaxed">Tidak ada solusi yang sama untuk semua. Kami merancang sesuai konteks dan kebutuhan Anda.</p>
        </div>
        
        <!-- Principle 3 -->
        <div class="bg-gray-50 p-8 rounded-2xl" data-aos="fade-up" data-aos-delay="300">
            <div class="mb-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="4" y="4" width="16" height="16" rx="2" />
                    <line x1="4" y1="9" x2="20" y2="9" />
                    <line x1="9" y1="20" x2="9" y2="9" />
                </svg>
            </div>
            <h4 class="text-snowy-primary font-bold mb-3">Pengalaman yang Mudah Digunakan</h4>
            <p class="text-gray-500 text-sm leading-relaxed">Sistem yang baik seharusnya memudahkan, bukan membuat pekerjaan menjadi lebih rumit.</p>
        </div>
        
        <!-- Principle 4 -->
        <div class="bg-gray-50 p-8 rounded-2xl" data-aos="fade-up" data-aos-delay="400">
            <div class="mb-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                </svg>
            </div>
            <h4 class="text-snowy-primary font-bold mb-3">Siap Berkembang Bersama Anda</h4>
            <p class="text-gray-500 text-sm leading-relaxed">Kami membangun pondasi digital yang siap mengikuti perkembangan bisnis dan organisasi Anda.</p>
        </div>
        
    </div>
</section>

<!-- ==========================================
     SECTION 11: FAQ
     ========================================== -->
<section class="py-20 px-6 max-w-4xl mx-auto">
    <div class="bg-white border rounded-2xl p-8 lg:p-12 shadow-sm" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-snowy-dark mb-8">Pertanyaan yang Sering Diajukan (FAQ)</h2>
        
        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="border-b border-gray-100 pb-4" data-aos="fade-up" data-aos-delay="100">
                <button class="faq-toggle w-full text-left flex justify-between items-center py-2 text-snowy-dark font-semibold outline-none">
                    Berapa lama proses pengerjaan sebuah proyek?
                    <!-- Ikon diberi transisi -->
                    <span class="text-3xl font-light text-gray-400 transition-transform duration-300 ease-in-out leading-none">+</span>
                </button>
                <!-- max-h-0 dan overflow-hidden untuk efek slide mulus -->
                <div class="faq-content overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                    <p class="pt-3 text-gray-500 text-sm leading-relaxed">
                        Waktu pengerjaan bergantung pada kompleksitas proyek. Untuk bundle standar, biasanya memakan waktu 2 hingga 5 minggu.
                    </p>
                </div>
            </div>
            
            <!-- FAQ Item 2 -->
            <div class="border-b border-gray-100 pb-4" data-aos="fade-up" data-aos-delay="200">
                <button class="faq-toggle w-full text-left flex justify-between items-center py-2 text-snowy-dark font-semibold outline-none">
                    Apakah saya perlu menyiapkan materi (teks/gambar)?
                    <span class="text-3xl font-light text-gray-400 transition-transform duration-300 ease-in-out leading-none">+</span>
                </button>
                <div class="faq-content overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                    <p class="pt-3 text-gray-500 text-sm leading-relaxed">
                        Ya, akan sangat membantu jika Anda memiliki materi dasar. Namun jika tidak, kami siap membantu melakukan copywriting dan kurasi gambar.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-10" data-aos="zoom-in" data-aos-delay="300">
            <button class="bg-snowy-primary hover:bg-snowy-primary-hover text-white px-6 py-3 rounded-lg font-medium transition-colors">Tanya Lebih Banyak</button>
        </div>
    </div>
</section>
<!-- ==========================================
         SECTION 12: FINAL CTA (Dipanggil dari Partials)
         ========================================== -->
    @include('partials.cta')

@endsection

@push('scripts')
<!-- Script AOS -->
    <!-- Perbaikan: Menambahkan tanda ">" yang tertinggal di akhir tag -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            // ==========================================
            // 0. Inisialisasi AOS (Animasi Scroll)
            // ==========================================
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    once: true,
                    offset: 80,
                    duration: 800,
                    easing: 'ease-out-cubic',
                });
            }

            // ==========================================
            // 1. Logika Accordion FAQ
            // ==========================================
            const faqToggles = document.querySelectorAll('.faq-toggle');
            
            faqToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('span');
                    
                    // Menutup FAQ lain jika ada yang sedang terbuka
                    document.querySelectorAll('.faq-content').forEach(c => {
                        if (c !== content) {
                            c.style.maxHeight = null;
                            const otherIcon = c.previousElementSibling.querySelector('span');
                            if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                        }
                    });

                    // Buka / Tutup FAQ yang sedang diklik
                    if (content.style.maxHeight) {
                        // Jika sedang buka, maka tutup
                        content.style.maxHeight = null;
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        // Jika sedang tutup, maka buka sesuai tinggi isinya
                        content.style.maxHeight = content.scrollHeight + "px";
                        icon.style.transform = 'rotate(45deg)'; // Putar tanda + jadi x
                    }
                });
            });

            // ==========================================
            // 2. Logika Slider Drag (Geser Layanan)
            // ==========================================
            const slider = document.getElementById('serviceCarousel');
            let isDown = false;
            let startX;
            let scrollLeft;

            if (slider) {
                slider.addEventListener('mousedown', (e) => {
                    isDown = true;
                    slider.classList.add('cursor-grabbing');
                    slider.classList.remove('cursor-grab');
                    slider.style.scrollSnapType = 'none'; 
                    startX = e.pageX - slider.offsetLeft;
                    scrollLeft = slider.scrollLeft;
                });
                slider.addEventListener('mouseleave', () => {
                    isDown = false;
                    slider.classList.remove('cursor-grabbing');
                    slider.classList.add('cursor-grab');
                    slider.style.scrollSnapType = ''; 
                });
                slider.addEventListener('mouseup', () => {
                    isDown = false;
                    slider.classList.remove('cursor-grabbing');
                    slider.classList.add('cursor-grab');
                    slider.style.scrollSnapType = ''; 
                });
                slider.addEventListener('mousemove', (e) => {
                    if (!isDown) return; 
                    e.preventDefault();
                    const x = e.pageX - slider.offsetLeft;
                    const walk = (x - startX) * 2; 
                    slider.scrollLeft = scrollLeft - walk;
                });
            }
            
        }); // Penutup DOMContentLoaded
    </script>
@endpush