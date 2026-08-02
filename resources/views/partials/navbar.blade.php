<nav class="navbar">
    <!-- Area Logo -->
    <div class="navbar-logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/frontend/img/logo-snowy.png') }}" alt="Logo Snowy">
        </a>
    </div>
    
<!-- Area Menu Navigasi -->
<div class="navbar-menu">
    <!-- Menu Tentang Kami -->
    <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'text-snowy-primary font-semibold' : 'text-gray-500' }}">
        Tentang Kami
    </a>
    
    <!-- Menu Layanan -->
    <a href="{{ url('/layanan') }}" class="{{ Request::is('layanan') ? 'text-snowy-primary font-semibold' : 'text-gray-500' }}">
        Layanan
    </a>
    
    <!-- Menu Proses Kerja -->
    <a href="{{ url('/proses-kerja') }}" class="{{ Request::is('proses-kerja') ? 'text-snowy-primary font-semibold' : 'text-gray-500' }}">
        Proses Kerja Kami
    </a>
    
    <!-- Menu Portfolio -->
    <a href="{{ url('/portofolio') }}" class="{{ Request::is('portofolio') ? 'text-snowy-primary font-semibold' : 'text-gray-500' }}">
        Portfolio
    </a>
    
    <!-- Tombol Hubungi Kami -->
    <a href="{{ url('/hubungi-kami') }}" class="btn-hubungi">
        Hubungi Kami
    </a>
</div>
</nav>