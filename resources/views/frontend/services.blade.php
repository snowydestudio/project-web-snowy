@extends('layouts.frontend')

@section('title', 'Layanan - Snowy Digital Agency')

@push('styles')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        primary: '#0D7B8A',
                        primaryHover: '#09636f',
                        secondary: '#D4F6FF',
                        darkText: '#111827',
                        grayBg: '#F8FAFC',
                        blueBtn: '#54A8FF', /* Warna tombol konsultasi di area harga */
                    }
                }
            }
        }
    </script>
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom Layanan CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/service.css') }}">
    <style>
        /* Styling khusus agar kartu layanan aktif terlihat persis desain */
        .service-card.active-service {
            border-bottom: 3px solid #0D7B8A !important;
            opacity: 1 !important;
        }
        .service-card {
            opacity: 0.6;
            border-bottom: 3px solid transparent;
        }
        .service-card:hover {
            opacity: 1;
        }
    </style>
@endpush

@section('content')

    <!-- Header Section -->
    <section class="pt-36 pb-8 px-6 text-center max-w-4xl mx-auto" data-aos="fade-up">
        <h1 class="text-3xl md:text-4xl font-extrabold text-darkText mb-2">Layanan</h1>
        <p class="text-gray-500 text-lg md:text-xl font-medium">Solusi Yang Kami Berikan</p>
    </section>

    <!-- Service Switcher Cards (Section 1 Selector) -->
    <section class="pb-0 px-6 max-w-5xl mx-auto" data-aos="fade-up">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">
            <!-- Card 1: Landing Page -->
            <button onclick="switchService('landing-page')" id="btn-landing-page" class="service-card active-service text-left pb-4 bg-transparent transition-all duration-300 cursor-pointer group">
                <div class="h-24 md:h-32 rounded-lg overflow-hidden mb-3 bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&q=80" alt="Landing Page" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <h3 class="font-semibold text-gray-900 text-sm md:text-base">Landing Page</h3>
            </button>

            <!-- Card 2: Website Profile -->
            <button onclick="switchService('website-profile')" id="btn-website-profile" class="service-card text-left pb-4 bg-transparent transition-all duration-300 cursor-pointer group">
                <div class="h-24 md:h-32 rounded-lg overflow-hidden mb-3 bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=500&q=80" alt="Website Profile" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <h3 class="font-semibold text-gray-900 text-sm md:text-base">Website Profile</h3>
            </button>

            <!-- Card 3: Custom Website -->
            <button onclick="switchService('custom-website')" id="btn-custom-website" class="service-card text-left pb-4 bg-transparent transition-all duration-300 cursor-pointer group">
                <div class="h-24 md:h-32 rounded-lg overflow-hidden mb-3 bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=500&q=80" alt="Custom Website" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <h3 class="font-semibold text-gray-900 text-sm md:text-base">Custom Website</h3>
            </button>

            <!-- Card 4: Brand Identity Design -->
            <button onclick="switchService('brand-identity')" id="btn-brand-identity" class="service-card text-left pb-4 bg-transparent transition-all duration-300 cursor-pointer group">
                <div class="h-24 md:h-32 rounded-lg overflow-hidden mb-3 bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?w=500&q=80" alt="Brand Identity" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <h3 class="font-semibold text-gray-900 text-sm md:text-base">Brand Identity Design</h3>
            </button>
        </div>
    </section>

    <!-- Dynamic Content Container -->
    <div id="service-content-wrapper" class="transition-opacity duration-500 opacity-100">

        <!-- Hero Active Service Section -->
        <section class="py-20 bg-slate-900 text-white relative overflow-hidden">
            <!-- Background Image Full -->
            <div class="absolute inset-0 opacity-40">
                <img id="service-bg-img" src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1600&q=80" alt="Background" class="w-full h-full object-cover">
            </div>
            <!-- Overlay Gradient agar teks terbaca -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
            
            <div class="relative max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center z-10">
                <div class="pr-0 md:pr-10">
                    <h2 id="service-title" class="text-3xl md:text-5xl lg:text-[54px] font-extrabold mb-6 leading-tight tracking-tight">Ubah Pengunjung Jadi Kustomer.</h2>
                    <p id="service-desc" class="text-gray-200 text-base md:text-lg mb-8 leading-relaxed font-light max-w-lg">Landing page yang dirancang untuk menjelaskan produk, membangun kepercayaan, dan meningkatkan konversi.</p>
                    
                    <ul class="space-y-3 mb-10 text-white font-medium">
                        <li class="flex items-center gap-3"><i class="fas fa-check text-white"></i> <span id="feat-1">Mulai dari IDR 3.500.000</span></li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-white"></i> <span id="feat-2">Estimasi 2–3 Minggu</span></li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-white"></i> <span id="feat-3">Konsultasi Gratis</span></li>
                    </ul>

                    <div class="flex items-center gap-6">
                        <!-- Sesuai desain: Tombol putih kotak -->
                        <a href="#pricing-section" class="bg-white text-gray-900 px-8 py-3.5 rounded-lg font-bold hover:bg-gray-100 transition shadow-lg">Konsultasi</a>
                        <a href="#details-section" class="text-white font-semibold underline underline-offset-4 hover:text-gray-300 transition">Lihat Detail</a>
                    </div>
                </div>
                <!-- Gambar Mockup di kanan disembunyikan jika menggunakan full bg seperti desain, atau dipertahankan jika ingin seperti kode lama -->
                <div class="hidden lg:block rounded-xl overflow-hidden shadow-2xl transform rotate-2">
                    <img id="service-main-img" src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80" alt="Mockup" class="w-full h-auto object-cover">
                </div>
            </div>
        </section>

<!-- Siapa yang Membutuhkan Layanan Ini? -->
        <section class="py-24 bg-white" data-aos="fade-up">
            <!-- Kontainer dilebarkan menjadi max-w-7xl -->
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-darkText mb-12 lg:mb-16 text-center">Siapa yang Membutuhkan Layanan Ini?</h2>
                
                <!-- Kotak Background Abu-abu Pembungkus dengan padding lebih luas -->
                <div class="bg-gray-50 p-8 md:p-12 lg:p-16 rounded-[2rem] lg:rounded-[3rem]">
                    <!-- Grid 2 kolom dengan jarak antar kotak (gap) yang diperbesar -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
                        
                        <!-- Target 1 -->
                        <!-- Tinggi gambar diperbesar (lg:h-[320px]) dan sudut lebih melengkung (rounded-3xl) -->
                        <div class="relative h-64 md:h-72 lg:h-[320px] rounded-3xl overflow-hidden group shadow-sm hover:shadow-xl cursor-pointer transition-all duration-300">
                            <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=800&q=80" alt="Produk Baru" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition duration-300"></div>
                            <!-- Font diperbesar hingga lg:text-4xl -->
                            <div class="absolute inset-0 flex items-center justify-center text-center px-4">
                                <h3 class="text-white text-3xl md:text-4xl font-extrabold tracking-widest leading-snug drop-shadow-md">PRODUK<br>BARU</h3>
                            </div>
                        </div>

                        <!-- Target 2 -->
                        <div class="relative h-64 md:h-72 lg:h-[320px] rounded-3xl overflow-hidden group shadow-sm hover:shadow-xl cursor-pointer transition-all duration-300">
                            <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=800&q=80" alt="Event & Seminar" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition duration-300"></div>
                            <div class="absolute inset-0 flex items-center justify-center text-center px-4">
                                <h3 class="text-white text-3xl md:text-4xl font-extrabold tracking-widest leading-snug drop-shadow-md">EVENT &<br>SEMINAR</h3>
                            </div>
                        </div>

                        <!-- Target 3 -->
                        <div class="relative h-64 md:h-72 lg:h-[320px] rounded-3xl overflow-hidden group shadow-sm hover:shadow-xl cursor-pointer transition-all duration-300">
                            <img src="https://images.unsplash.com/photo-1556742049-0a67d553c2a8?w=800&q=80" alt="UMKM" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition duration-300"></div>
                            <div class="absolute inset-0 flex items-center justify-center text-center px-4">
                                <h3 class="text-white text-3xl md:text-4xl font-extrabold tracking-widest leading-snug drop-shadow-md">UMKM</h3>
                            </div>
                        </div>

                        <!-- Target 4 -->
                        <div class="relative h-64 md:h-72 lg:h-[320px] rounded-3xl overflow-hidden group shadow-sm hover:shadow-xl cursor-pointer transition-all duration-300">
                            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&q=80" alt="Restoran" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition duration-300"></div>
                            <div class="absolute inset-0 flex items-center justify-center text-center px-4">
                                <h3 class="text-white text-3xl md:text-4xl font-extrabold tracking-widest leading-snug drop-shadow-md">RESTORAN</h3>
                            </div>
                        </div>

                        <!-- Target 5 -->
                        <div class="relative h-64 md:h-72 lg:h-[320px] rounded-3xl overflow-hidden group shadow-sm hover:shadow-xl cursor-pointer transition-all duration-300">
                            <img src="https://images.unsplash.com/photo-1579389083078-4e7018379f7e?w=800&q=80" alt="Content Creator" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition duration-300"></div>
                            <div class="absolute inset-0 flex items-center justify-center text-center px-4">
                                <h3 class="text-white text-3xl md:text-4xl font-extrabold tracking-widest leading-snug drop-shadow-md">CONTENT<br>CREATOR</h3>
                            </div>
                        </div>

                        <!-- Target 6 -->
                        <div class="relative h-64 md:h-72 lg:h-[320px] rounded-3xl overflow-hidden group shadow-sm hover:shadow-xl cursor-pointer transition-all duration-300">
                            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=800&q=80" alt="Startup" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition duration-300"></div>
                            <div class="absolute inset-0 flex items-center justify-center text-center px-4">
                                <h3 class="text-white text-3xl md:text-4xl font-extrabold tracking-widest leading-snug drop-shadow-md">STARTUP</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Yang Akan Kamu Dapatkan & Mengapa Ini Penting -->
        <section id="details-section" >
            <div class="max-w-6xl mx-auto px-6">
                <!-- Yang Akan Kamu Dapatkan -->
                <div class="mb-24">
                    <h2 class="text-3xl md:text-4xl font-bold text-darkText mb-10">Yang Akan Kamu Dapatkan</h2>
                    <div class="bg-white p-8 md:p-12 rounded-3xl shadow-lg border border-gray-100 grid grid-cols-1 md:grid-cols-3 gap-y-10 gap-x-8">
                        <div class="flex gap-4 items-start">
                            <div class="text-blue-500 text-3xl flex-shrink-0"><i class="fas fa-layer-group"></i></div>
                            <div>
                                <h4 class="font-bold text-blue-500 text-lg mb-1">Landing Page Kustom</h4>
                                <p class="text-gray-800 font-medium text-sm">Dirancang khusus untuk bisnis Anda.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div class="text-blue-500 text-3xl flex-shrink-0"><i class="fas fa-compress-arrows-alt"></i></div>
                            <div>
                                <h4 class="font-bold text-blue-500 text-lg mb-1">Responsif</h4>
                                <p class="text-gray-800 font-medium text-sm">Versi horizontal, vertikal, icon.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div class="text-blue-500 text-3xl flex-shrink-0"><i class="fas fa-search"></i></div>
                            <div>
                                <h4 class="font-bold text-blue-500 text-lg mb-1">SEO Ready</h4>
                                <p class="text-gray-800 font-medium text-sm">Warna konsisten untuk seluruh media.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div class="text-blue-500 text-3xl flex-shrink-0"><i class="fas fa-font"></i></div>
                            <div>
                                <h4 class="font-bold text-blue-500 text-lg mb-1">Strategi Konversi</h4>
                                <p class="text-gray-800 font-medium text-sm">Font utama dan sekunder.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div class="text-blue-500 text-3xl flex-shrink-0"><i class="fas fa-book-open"></i></div>
                            <div>
                                <h4 class="font-bold text-blue-500 text-lg mb-1">Integrasi WhatsApp</h4>
                                <p class="text-gray-800 font-medium text-sm">Panduan penggunaan logo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mengapa Ini Penting -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-darkText mb-12">Mengapa Ini Penting</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm border border-gray-100">
                            <div class="aspect-[3/4] rounded-xl overflow-hidden mb-4"><img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?w=500&q=80" alt="Card" class="w-full h-full object-cover"></div>
                            <p class="text-gray-700 text-sm leading-relaxed font-medium">Identitas visual yang konsisten membuat bisnis lebih mudah dikenali.</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm border border-gray-100">
                            <div class="aspect-[3/4] rounded-xl overflow-hidden mb-4"><img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=500&q=80" alt="Card" class="w-full h-full object-cover"></div>
                            <p class="text-gray-700 text-sm leading-relaxed font-medium">Pelanggan lebih percaya pada bisnis yang tampil profesional.</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm border border-gray-100">
                            <div class="aspect-[3/4] rounded-xl overflow-hidden mb-4"><img src="https://images.unsplash.com/photo-1526738549149-8e07eca6c147?w=500&q=80" alt="Card" class="w-full h-full object-cover"></div>
                            <p class="text-gray-700 text-sm leading-relaxed font-medium">Brand yang baik lebih mudah diterapkan di website, media sosial, hingga kemasan.</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm border border-gray-100">
                            <div class="aspect-[3/4] rounded-xl overflow-hidden mb-4"><img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=500&q=80" alt="Card" class="w-full h-full object-cover"></div>
                            <p class="text-gray-700 text-sm leading-relaxed font-medium">Semua media terlihat dalam satu kesatuan yang utuh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand In Action -->
        <section class="py-24 bg-white border-t border-gray-100">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold text-darkText mb-12">Brand In Action</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="rounded-3xl overflow-hidden h-[400px]"><img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=800&q=80" alt="Action" class="w-full h-full object-cover"></div>
                    <div class="rounded-3xl overflow-hidden h-[400px]"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80" alt="Action" class="w-full h-full object-cover"></div>
                    <div class="rounded-3xl overflow-hidden h-[400px]"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80" alt="Action" class="w-full h-full object-cover"></div>
                </div>
            </div>
        </section>

        <!-- Our Process -->
        <section class="py-24 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold text-darkText mb-16">Our Process</h2>
                
                <!-- Desain Proses dengan Garis Penghubung -->
                <div class="relative">
                    <!-- Garis abu-abu di belakang icon (hanya muncul di desktop) -->
                    <div class="hidden md:block absolute top-6 left-[10%] right-[10%] h-[2px] bg-gray-200 z-0"></div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative z-10 text-left md:text-center">
                        <div class="bg-white p-4">
                            <div class="text-blue-500 text-4xl mb-6 md:mx-auto bg-white inline-block px-4"><i class="fas fa-lightbulb"></i></div>
                            <h3 class="font-bold text-darkText text-lg mb-2">Discover</h3>
                            <p class="text-gray-700 font-medium text-sm leading-relaxed">Memahami bisnis, tujuan, dan karakter brand Anda.</p>
                        </div>
                        <div class="bg-white p-4">
                            <div class="text-blue-500 text-4xl mb-6 md:mx-auto bg-white inline-block px-4"><i class="fas fa-search"></i></div>
                            <h3 class="font-bold text-darkText text-lg mb-2">Design</h3>
                            <p class="text-gray-700 font-medium text-sm leading-relaxed">Mengeksplorasi konsep visual yang sesuai dengan identitas brand.</p>
                        </div>
                        <div class="bg-white p-4">
                            <div class="text-blue-500 text-4xl mb-6 md:mx-auto bg-white inline-block px-4"><i class="fas fa-object-group"></i></div>
                            <h3 class="font-bold text-darkText text-lg mb-2">Refine</h3>
                            <p class="text-gray-700 font-medium text-sm leading-relaxed">Menyempurnakan desain melalui kolaborasi dan revisi.</p>
                        </div>
                        <div class="bg-white p-4">
                            <div class="text-blue-500 text-4xl mb-6 md:mx-auto bg-white inline-block px-4"><i class="fas fa-box-open"></i></div>
                            <h3 class="font-bold text-darkText text-lg mb-2">Deliver</h3>
                            <p class="text-gray-700 font-medium text-sm leading-relaxed">Menyerahkan seluruh aset final yang siap digunakan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Price Section -->
        <section id="pricing-section" class="py-24 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold text-darkText mb-12">Price</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
                    <!-- List Kiri -->
                    <div>
                        <ul class="space-y-4 text-darkText font-medium text-lg">
                            <li class="flex items-center gap-4"><i class="fas fa-check text-blue-500"></i> <span id="price-item-1">Logo Utama</span></li>
                            <li class="flex items-center gap-4"><i class="fas fa-check text-blue-500"></i> <span id="price-item-2">Variasi Logo</span></li>
                            <li class="flex items-center gap-4"><i class="fas fa-check text-blue-500"></i> <span id="price-item-3">Warna Palet</span></li>
                            <li class="flex items-center gap-4"><i class="fas fa-check text-blue-500"></i> <span id="price-item-4">Tipografi</span></li>
                            <li class="flex items-center gap-4"><i class="fas fa-check text-blue-500"></i> <span id="price-item-5">Brand Guideline</span></li>
                            <li class="flex items-center gap-4"><i class="fas fa-check text-blue-500"></i> <span id="price-item-6">Source File</span></li>
                            <li class="flex items-center gap-4"><i class="fas fa-check text-blue-500"></i> <span id="price-item-7">2–3 Minggu</span></li>
                            <li class="flex items-center gap-4"><i class="fas fa-check text-blue-500"></i> <span id="price-item-8">3x Revisi</span></li>
                        </ul>
                    </div>
                    
                    <!-- Kotak Harga Kanan (Sesuai Desain: Teks rata kanan, tombol biru kotak) -->
                    <div class="text-right">
                        <p class="text-gray-500 font-semibold mb-1">Mulai dari</p>
                        <h3 id="service-price" class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-darkText tracking-tight mb-6">IDR 3.500.000</h3>
                        
                        <a href="#" class="inline-block bg-blueBtn text-white w-full md:w-64 py-3 rounded-lg font-bold text-lg hover:bg-blue-500 transition shadow-md mb-4 text-center">Konsultasi</a>
                        
                        <p class="text-xs text-gray-400 mb-6 flex items-center justify-end gap-2">Konsultasi pertama 100% gratis & tanpa komitmen <i class="far fa-shield"></i></p>
                        
                        <!-- Timeline Cicilan -->
                        <div class="bg-gray-50 p-5 rounded-lg inline-flex items-center justify-end gap-6 text-sm text-gray-700 w-full md:w-auto border border-gray-100">
                            <div class="text-left leading-snug">
                                <strong>Pembayaran mudah</strong><br>
                                <span class="text-xs text-gray-500">Cicilan 3 tahap tanpa bunga</span>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="text-center">
                                    <span class="w-10 h-10 rounded-full border-2 border-blue-200 flex items-center justify-center font-bold text-blue-500 text-xs bg-white relative z-10">40%</span>
                                    <span class="text-[10px] text-gray-400 mt-1 block">Tahap 1</span>
                                </div>
                                <div class="w-4 h-[2px] bg-gray-200 -mt-4"></div>
                                <div class="text-center">
                                    <span class="w-10 h-10 rounded-full border-2 border-blue-200 flex items-center justify-center font-bold text-blue-500 text-xs bg-white relative z-10">30%</span>
                                    <span class="text-[10px] text-gray-400 mt-1 block">Tahap 2</span>
                                </div>
                                <div class="w-4 h-[2px] bg-gray-200 -mt-4"></div>
                                <div class="text-center">
                                    <span class="w-10 h-10 rounded-full border-2 border-blue-200 flex items-center justify-center font-bold text-blue-500 text-xs bg-white relative z-10">30%</span>
                                    <span class="text-[10px] text-gray-400 mt-1 block">Tahap 3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- FAQ Section -->
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-darkText mb-12 text-center">Pertanyaan yang Sering Diajukan (FAQ)</h2>
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 cursor-pointer hover:border-gray-300 transition">
                    <div class="flex justify-between items-center font-bold text-lg text-darkText">
                        <span>Berapa lama proses pengerjaan proyek?</span>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 cursor-pointer hover:border-gray-300 transition">
                    <div class="flex justify-between items-center font-bold text-lg text-darkText">
                        <span>Bagaimana sistem pembayarannya?</span>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 cursor-pointer hover:border-gray-300 transition">
                    <div class="flex justify-between items-center font-bold text-lg text-darkText">
                        <span>Apakah ada garansi revisi?</span>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </div>
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
    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 100 });
    </script>
    <!-- Custom Layanan JS -->
    <script src="{{ asset('assets/frontend/js/service.js') }}"></script>
@endpush