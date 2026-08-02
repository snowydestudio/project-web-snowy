@extends('layouts.frontend')

@section('title', 'Portofolio - Snowy Digital Agency')

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
                        primary: '#0D7B8A', // Teal color matching navbar and agency theme
                        secondary: '#D4F6FF', // Background color for CTA section
                        ctaBg: '#E6F4F9',   // Background section CTA
                    }
                }
            }
        }
    </script>

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/porto.css') }}">
@endpush

@section('content')
    <!-- Hero Section (Tetap Statis) -->
    <section class="pt-40 pb-20 px-6 md:px-16 max-w-4xl mx-auto text-center animate-on-scroll">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight tracking-tight mb-6">
            Setiap Proyek Dimulai dengan Kepercayaan.
        </h1>
        <p class="text-gray-500 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
            Setiap proyek adalah kolaborasi panjang yang dirancang untuk mencapai satu titik: pertumbuhan dan berkembang.
        </p>
    </section>

    <!-- ==========================================
         BAGIAN INI YANG DIOTOMATISKAN OLEH CMS 
         ========================================== -->
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

            <!-- Card Container (Looping dari Database) -->
            <div id="studi-kasus-container" class="flex overflow-x-auto gap-6 pb-4 snap-x snap-mandatory no-scrollbar" style="scroll-behavior: smooth;">
                
            @forelse($portfolios as $portfolio)
                <!-- Card Dinamis dengan Foto Utuh Tanpa Terpotong -->
                <div class="flex-none w-[90vw] sm:w-[540px] md:w-[640px] h-[380px] md:h-[440px] relative rounded-3xl overflow-hidden group cursor-pointer snap-start shrink-0 shadow-lg bg-gray-950 flex items-center justify-center">
                    
                    <!-- 1. Menggunakan object-contain agar foto utuh dan tidak terpotong -->
                    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-full h-full object-contain transition-transform duration-700 group-hover:scale-105 relative z-10">
                    
                    <!-- 2. Gradient Overlay untuk teks di bagian bawah -->
                    <div class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-black/95 via-black/60 to-transparent z-20 pointer-events-none"></div>
                    
                    <!-- 3. Content Teks dari CMS -->
                    <div class="absolute bottom-0 left-0 p-6 md:p-8 text-white w-full z-30">
                        <p class="text-sm md:text-base font-medium opacity-90 mb-2">
                            Industri: {{ $portfolio->industry }} | Services: {{ $portfolio->services }}
                        </p>
                        
                        <h3 class="text-2xl md:text-3xl font-bold mb-2">{{ $portfolio->title }}</h3>
                        
                        <p class="text-gray-200 text-sm md:text-base line-clamp-2">
                            {{ \Illuminate\Support\Str::limit($portfolio->result, 80, '...') }}
                        </p>
                    </div>
                </div>
            @empty
                <!-- Tampilan jika CMS belum ada isinya -->
                <div class="flex-none w-full flex items-center justify-center h-[380px] border-2 border-dashed border-gray-300 rounded-3xl bg-gray-50">
                    <p class="text-gray-500 font-medium text-lg">Belum ada portofolio yang ditambahkan dari Admin Panel.</p>
                </div>
            @endforelse

            </div>
        </div>
    </section>
    <!-- ==========================================
         BATAS BAGIAN YANG DIOTOMATISKAN 
         ========================================== -->

    <!-- Tim di Balik Proyek Ini (Tetap Statis) -->
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

    <!-- Dokumentasi (Tetap Statis) -->
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
    <script src="{{ asset('assets/frontend/js/porto.js') }}"></script>
@endpush