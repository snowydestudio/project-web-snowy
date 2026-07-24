@extends('layouts.frontend')

@section('content')

    <!-- =====================================
         1. HERO SECTION
         ===================================== -->
    <section class="hero-section">
        <h1>Membangun Pengalaman Digital yang <span>Bermakna</span></h1>
        <p>Kami adalah studio kreatif yang membantu bisnis Anda tumbuh melalui identitas visual yang kuat, UI/UX yang intuitif, dan pengembangan sistem yang handal.</p>
        
        <div class="hero-buttons">
            <a href="{{ url('/portofolio') }}" class="btn-primary">Lihat Karya Kami</a>
            <a href="{{ url('/hubungi-kami') }}" class="btn-outline">Mulai Diskusi</a>
        </div>
    </section>

    <!-- =====================================
         2. SERVICES SECTION (Ringkasan Layanan)
         ===================================== -->
    <section class="services-section">
        <div class="section-header">
            <h2>Keahlian Kami</h2>
            <p>Solusi end-to-end untuk kebutuhan digital perusahaan Anda.</p>
        </div>

        <div class="services-grid">
            
            <!-- Card Layanan 1 -->
            <div class="service-card">
                <div class="service-icon">🎨</div>
                <h3>Brand Identity</h3>
                <p>Merancang logo dan identitas visual perusahaan yang profesional, mudah diingat, dan mencerminkan nilai inti bisnis Anda.</p>
            </div>

            <!-- Card Layanan 2 -->
            <div class="service-card">
                <div class="service-icon">✨</div>
                <h3>UI/UX Design</h3>
                <p>Membuat purwarupa interaktif dan antarmuka pengguna yang estetis sekaligus memberikan pengalaman navigasi yang nyaman bagi pengunjung.</p>
            </div>

            <!-- Card Layanan 3 -->
            <div class="service-card">
                <div class="service-icon">💻</div>
                <h3>Web Development</h3>
                <p>Membangun sistem informasi dan website dinamis berkinerja tinggi yang disesuaikan dengan alur kerja perusahaan Anda.</p>
            </div>

        </div>
    </section>

@endsection