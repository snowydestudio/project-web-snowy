<nav class="navbar">
    <!-- Area Logo -->
    <div class="navbar-logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/frontend/img/logo-snowy.png') }}" alt="Logo Snowy">
        </a>
    </div>
    
    <!-- Area Menu Navigasi -->
    <div class="navbar-menu">
        <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
        <a href="{{ url('/layanan') }}">Layanan</a>
        <a href="{{ url('/proses-kerja') }}">Proses Kerja Kami</a>
        <a href="{{ url('/portofolio') }}">Portfolio</a>
        <a href="{{ url('/hubungi-kami') }}" class="btn-hubungi">Hubungi Kami</a>
    </div>
</nav>