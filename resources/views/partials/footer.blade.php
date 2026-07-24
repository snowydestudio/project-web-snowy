<footer class="footer-section">
    <div class="footer-container">
        
        <!-- Kolom Brand & Deskripsi -->
        <div class="footer-brand">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/frontend/img/logo-snowy.png') }}" alt="Logo Snowy">
            </a>
            <p>Membantu bisnis membangun kepercayaan melalui desain yang strategis dan pengalaman digital yang bermakna.</p>
        </div>

        <!-- Kolom Navigasi Footer -->
        <div class="footer-links-group">
            
            <div class="footer-column">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="{{ url('/tentang-kami') }}">About</a></li>
                    <li><a href="{{ url('/layanan') }}">Services</a></li>
                    <li><a href="{{ url('/proses-kerja') }}">Our Workflow</a></li>
                    <li><a href="{{ url('/portofolio') }}">Portfolio</a></li>
                    <li><a href="#">Snowy Team</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Brand Identity</a></li>
                    <li><a href="#">Landing Page</a></li>
                    <li><a href="#">Company Profile</a></li>
                    <li><a href="#">Custom Website</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Connect</h4>
                <ul>
                    <li><a href="#">Behance</a></li>
                    <li><a href="#">Upwork</a></li>
                    <li><a href="#">Github</a></li>
                    <li><a href="#">Whatsapp</a></li>
                </ul>
            </div>
            
        </div>
    </div>

    <!-- Area Copyright -->
    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Snowy Design Studio. All rights reserved.</p>
    </div>
</footer>