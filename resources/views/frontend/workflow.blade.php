@extends('layouts.frontend')

@section('title', 'Proses Kerja - Snowy Digital Agency')

@push('styles')
    <!-- Konfigurasi Tailwind Custom Khusus Halaman Workflow -->
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
                        secondary: '#F0F9FA',
                        lightAccent: '#F0F9FA',
                        darkText: '#111827',
                        grayBg: '#F8FAFC',
                    }
                }
            }
        }
    </script>

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/workflow.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="pt-40 pb-20 px-6 max-w-4xl mx-auto text-center" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-darkText leading-tight mb-6">
            Setiap Proyek Hebat<br>Berawal dari Pemahaman.
        </h1>
        <p class="text-gray-500 text-lg md:text-xl max-w-2xl mx-auto font-medium">
            Kami percaya hasil terbaik lahir dari proses yang jelas, kolaboratif, dan terstruktur.
        </p>
    </section>

    <!-- Philosophy Section -->
    <section class="py-16 px-6 md:px-12 max-w-7xl mx-auto" data-aos="fade-up">
        <div class="mb-12">
            <h3 class="text-xl font-bold text-darkText mb-4">Filosofi Kami</h3>
            <h2 class="text-3xl md:text-4xl font-bold text-darkText leading-snug max-w-4xl">
                Kami memulai dengan memahami bisnis, tujuan, pengguna, dan tantangan yang ingin diselesaikan
            </h2>
        </div>
        
        <!-- Horizontal Image Gallery with Overlay Nav -->
        <div class="relative group/gallery">
            <!-- Transparent Floating Overlay Buttons -->
            <button id="gallery-prev-overlay" class="absolute left-3 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/50 backdrop-blur-md border border-white/70 text-gray-800 hover:bg-primary hover:text-white flex items-center justify-center shadow-md transition-all opacity-0 group-hover/gallery:opacity-100 transform hover:scale-110 active:scale-95 cursor-pointer">
                <i class="fas fa-chevron-left text-sm"></i>
            </button>
            <button id="gallery-next-overlay" class="absolute right-3 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/50 backdrop-blur-md border border-white/70 text-gray-800 hover:bg-primary hover:text-white flex items-center justify-center shadow-md transition-all opacity-0 group-hover/gallery:opacity-100 transform hover:scale-110 active:scale-95 cursor-pointer">
                <i class="fas fa-chevron-right text-sm"></i>
            </button>

            <div class="flex gap-6 overflow-x-auto pb-8 hide-scrollbar" id="gallery">
                <div class="w-[26rem] sm:w-[28rem] h-72 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all flex-shrink-0 group" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=800&q=80" alt="Brainstorming" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="w-[26rem] sm:w-[28rem] h-72 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all flex-shrink-0 group" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?auto=format&fit=crop&w=800&q=80" alt="Wireframing" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="w-[26rem] sm:w-[28rem] h-72 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all flex-shrink-0 group" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80" alt="Development" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow Section -->
    <section class="py-16 px-6 md:px-12 max-w-7xl mx-auto" data-aos="fade-up">
        <div class="flex justify-end mb-10">
            <h3 class="text-2xl font-bold text-darkText">Alur Kerja Kami</h3>
        </div>

        <div class="flex flex-col md:flex-row gap-6">
            <!-- Sticky Side Number Navbar for FAQ / Accordion -->
            <div class="hidden md:flex flex-col bg-primary text-white rounded-xl py-3 px-1.5 w-12 items-center space-y-2 sticky top-28 self-start shadow-md z-30 transition-all">
                <button data-index="0" class="faq-nav-btn w-9 h-9 rounded-lg font-bold text-sm flex items-center justify-center text-white/80 hover:text-white hover:bg-white/20 active:scale-95" title="01 Berdiskusi">1</button>
                <button data-index="1" class="faq-nav-btn w-9 h-9 rounded-lg font-bold text-sm flex items-center justify-center text-white/80 hover:text-white hover:bg-white/20 active:scale-95" title="02 Memahami Kebutuhan">2</button>
                <button data-index="2" class="faq-nav-btn w-9 h-9 rounded-lg font-bold text-sm flex items-center justify-center text-white/80 hover:text-white hover:bg-white/20 active:scale-95" title="03 Menyusun Strategi">3</button>
                <button data-index="3" class="faq-nav-btn w-9 h-9 rounded-lg font-bold text-sm flex items-center justify-center text-white/80 hover:text-white hover:bg-white/20 active:scale-95" title="04 Penawaran Proyek">4</button>
                <button data-index="4" class="faq-nav-btn w-9 h-9 rounded-lg font-bold text-sm flex items-center justify-center text-white/80 hover:text-white hover:bg-white/20 active:scale-95" title="05 Desain">5</button>
                <button data-index="5" class="faq-nav-btn w-9 h-9 rounded-lg font-bold text-sm flex items-center justify-center text-white/80 hover:text-white hover:bg-white/20 active:scale-95" title="06 Pengembangan">6</button>
                <button data-index="6" class="faq-nav-btn w-9 h-9 rounded-lg font-bold text-sm flex items-center justify-center text-white/80 hover:text-white hover:bg-white/20 active:scale-95" title="07 Peluncuran">7</button>
                <button data-index="7" class="faq-nav-btn w-9 h-9 rounded-lg font-bold text-sm flex items-center justify-center text-white/80 hover:text-white hover:bg-white/20 active:scale-95" title="08 Dukungan & Pengembangan">8</button>
            </div>

            <!-- Accordion List -->
            <div class="flex-1 w-full flex flex-col gap-3">
                <!-- Item 1 -->
                <div data-index="0" class="accordion-item bg-grayBg rounded-lg p-5 cursor-pointer transition-all hover:bg-gray-200" data-aos="fade-up" data-aos-delay="50">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-6">
                            <span class="text-2xl font-bold text-darkText">01</span>
                            <div>
                                <h4 class="font-bold text-darkText text-lg">Berdiskusi</h4>
                                <p class="text-sm text-gray-500">Memulai Percakapan</p>
                            </div>
                        </div>
                        <span class="icon text-2xl font-light transition-transform duration-300">+</span>
                    </div>
                    <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                        <p class="pt-4 text-gray-600 text-sm">Sesi konsultasi awal untuk saling mengenal dan memahami garis besar ide serta kebutuhan proyek Anda.</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div data-index="1" class="accordion-item bg-grayBg rounded-lg p-5 cursor-pointer transition-all hover:bg-gray-200" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-6">
                            <span class="text-2xl font-bold text-darkText">02</span>
                            <div>
                                <h4 class="font-bold text-darkText text-lg">Memahami Kebutuhan</h4>
                                <p class="text-sm text-gray-500">Memahami Bisnis Anda</p>
                            </div>
                        </div>
                        <span class="icon text-2xl font-light transition-transform duration-300">+</span>
                    </div>
                    <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                        <p class="pt-4 text-gray-600 text-sm">Riset mendalam mengenai target audiens, kompetitor, dan sasaran bisnis yang ingin dicapai.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div data-index="2" class="accordion-item bg-grayBg rounded-lg p-5 cursor-pointer transition-all hover:bg-gray-200" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-6">
                            <span class="text-2xl font-bold text-darkText">03</span>
                            <div>
                                <h4 class="font-bold text-darkText text-lg">Menyusun Strategi</h4>
                                <p class="text-sm text-gray-500">Merancang Solusi Terbaik</p>
                            </div>
                        </div>
                        <span class="icon text-2xl font-light transition-transform duration-300">+</span>
                    </div>
                    <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                        <p class="pt-4 text-gray-600 text-sm">Membuat arsitektur informasi, user flow, dan wireframe sebagai pondasi proyek.</p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div data-index="3" class="accordion-item bg-grayBg rounded-lg p-5 cursor-pointer transition-all hover:bg-gray-200" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-6">
                            <span class="text-2xl font-bold text-darkText">04</span>
                            <div>
                                <h4 class="font-bold text-darkText text-lg">Penawaran Proyek</h4>
                                <p class="text-sm text-gray-500">Menyepakati Ruang Lingkup Proyek</p>
                            </div>
                        </div>
                        <span class="icon text-2xl font-light transition-transform duration-300">+</span>
                    </div>
                    <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                        <p class="pt-4 text-gray-600 text-sm">Finalisasi timeline, deliverables, dan anggaran sebelum masuk tahap eksekusi.</p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div data-index="4" class="accordion-item bg-grayBg rounded-lg p-5 cursor-pointer transition-all hover:bg-gray-200" data-aos="fade-up" data-aos-delay="250">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-6">
                            <span class="text-2xl font-bold text-darkText">05</span>
                            <div>
                                <h4 class="font-bold text-darkText text-lg">Desain</h4>
                                <p class="text-sm text-gray-500">Mengubah Ide Menjadi Pengalaman</p>
                            </div>
                        </div>
                        <span class="icon text-2xl font-light transition-transform duration-300">+</span>
                    </div>
                    <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                        <p class="pt-4 text-gray-600 text-sm">Eksplorasi visual, pembuatan UI/UX, dan interaktif prototipe (High-Fidelity).</p>
                    </div>
                </div>
                <!-- Item 6 -->
                <div data-index="5" class="accordion-item bg-grayBg rounded-lg p-5 cursor-pointer transition-all hover:bg-gray-200" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-6">
                            <span class="text-2xl font-bold text-darkText">06</span>
                            <div>
                                <h4 class="font-bold text-darkText text-lg">Pengembangan</h4>
                                <p class="text-sm text-gray-500">Membangun Produk Digital</p>
                            </div>
                        </div>
                        <span class="icon text-2xl font-light transition-transform duration-300">+</span>
                    </div>
                    <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                        <p class="pt-4 text-gray-600 text-sm">Penulisan kode clean code menggunakan teknologi modern yang responsif dan optimal.</p>
                    </div>
                </div>
                <!-- Item 7 -->
                <div data-index="6" class="accordion-item bg-grayBg rounded-lg p-5 cursor-pointer transition-all hover:bg-gray-200" data-aos="fade-up" data-aos-delay="350">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-6">
                            <span class="text-2xl font-bold text-darkText">07</span>
                            <div>
                                <h4 class="font-bold text-darkText text-lg">Peluncuran</h4>
                                <p class="text-sm text-gray-500">Siap Digunakan</p>
                            </div>
                        </div>
                        <span class="icon text-2xl font-light transition-transform duration-300">+</span>
                    </div>
                    <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                        <p class="pt-4 text-gray-600 text-sm">Quality Assurance (QA) testing, perbaikan bug, dan deployment website ke server live.</p>
                    </div>
                </div>
                <!-- Item 8 -->
                <div data-index="7" class="accordion-item bg-grayBg rounded-lg p-5 cursor-pointer transition-all hover:bg-gray-200" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-6">
                            <span class="text-2xl font-bold text-darkText">08</span>
                            <div>
                                <h4 class="font-bold text-darkText text-lg">Dukungan & Pengembangan</h4>
                                <p class="text-sm text-gray-500">Terus Tumbuh Bersama</p>
                            </div>
                        </div>
                        <span class="icon text-2xl font-light transition-transform duration-300">+</span>
                    </div>
                    <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                        <p class="pt-4 text-gray-600 text-sm">Monitoring performa, maintenance rutin, dan iterasi fitur baru berdasarkan data analitik.</p>
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
    <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 100,
        });
    </script>

    <!-- Custom JS untuk Workflow (Accordion & Gallery) -->
    <script src="{{ asset('assets/frontend/js/workflow.js') }}"></script>
@endpush