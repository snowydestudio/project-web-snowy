// Data Layanan Interaktif
const servicesData = {
    'landing-page': {
        title: "Ubah Pengunjung Jadi Kustomer.",
        desc: "Landing page yang dirancang untuk menjelaskan produk, membangun kepercayaan, dan meningkatkan konversi.",
        feat1: "Mulai dari IDR 3.500.000",
        feat2: "Estimasi 2–3 Minggu",
        feat3: "Konsultasi Gratis",
        price: "IDR 3.500.000",
        image: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80",
        bgImage: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&q=80",
        items: ["Landing Page Kustom", "Responsif di Semua Perangkat", "SEO Ready", "Strategi Konversi Optimal", "Integrasi WhatsApp", "Source File Lengkap", "2–3 Minggu Pengerjaan", "3x Revisi"]
    },
    'website-profile': {
        title: "Tampilkan Kredibilitas Bisnis Anda Secara Profesional.",
        desc: "Website Company Profile elegan untuk membangun citra kuat di mata klien, partner, dan investor.",
        feat1: "Mulai dari IDR 5.000.000",
        feat2: "Estimasi 3–4 Minggu",
        feat3: "Free Domain & Hosting 1 Tahun",
        price: "IDR 5.000.000",
        image: "https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=800&q=80",
        bgImage: "https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=1200&q=80",
        items: ["Multi-page Company Profile", "Desain Eksklusif & Kustom", "CMS Panel (Mudah Edit Konten)", "SEO Optimized", "Integrasi Media Sosial", "Formulir Kontak & Google Maps", "3–4 Minggu Pengerjaan", "Garansi Keamanan 1 Tahun"]
    },
    'custom-website': {
        title: "Solusi Digital Khusus Sesuai Kebutuhan Kompleks Anda.",
        desc: "Aplikasi web atau sistem custom berskala besar dengan fitur spesifik dan performa tinggi.",
        feat1: "Mulai dari IDR 8.000.000+",
        feat2: "Estimasi 4–6 Minggu",
        feat3: "Arsitektur Sistem Scalable",
        price: "IDR 8.000.000",
        image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80",
        bgImage: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1200&q=80",
        items: ["Database Arsitektur Kustom", "Dashboard Admin Kompleks", "API Integration", "High Performance & Security", "Testing & QA Mendalam", "Dokumentasi Sistem", "4–6 Minggu Pengerjaan", "Full Support Maintenance"]
    },
    'brand-identity': {
        title: "Bangun Identitas Visual yang Melekat di Hati Pelanggan.",
        desc: "Desain logo, palet warna, tipografi, dan panduan brand profesional untuk membedakan bisnis Anda dari kompetitor.",
        feat1: "Mulai dari IDR 3.500.000",
        feat2: "Estimasi 2–3 Minggu",
        feat3: "Brand Guidelines Lengkap",
        price: "IDR 3.500.000",
        image: "https://images.unsplash.com/photo-1626785774573-4b799315345d?w=800&q=80",
        bgImage: "https://images.unsplash.com/photo-1626785774573-4b799315345d?w=1200&q=80",
        items: ["Logo Utama", "Variasi Logo & Submark", "Palet Warna Profesional", "Tipografi Resmi Brand", "Brand Guideline Buku Panduan", "Source File Vektor (AI, EPS, PDF)", "2–3 Minggu Pengerjaan", "3x Revisi Desain"]
    }
};

function switchService(serviceKey) {
    const data = servicesData[serviceKey];
    if (!data) return;

    const wrapper = document.getElementById('service-content-wrapper');
    
    // Efek transisi pudar (fade out & fade in)
    wrapper.style.opacity = 0;

    setTimeout(() => {
        // Update konten teks dan gambar utama
        document.getElementById('service-title').innerText = data.title;
        document.getElementById('service-desc').innerText = data.desc;
        document.getElementById('feat-1').innerText = data.feat1;
        document.getElementById('feat-2').innerText = data.feat2;
        document.getElementById('feat-3').innerText = data.feat3;
        document.getElementById('service-price').innerText = data.price;
        document.getElementById('service-main-img').src = data.image;
        document.getElementById('service-bg-img').src = data.bgImage;

        // Update list harga dinamis
        for (let i = 1; i <= 8; i++) {
            const itemElement = document.getElementById(`price-item-${i}`);
            if (itemElement && data.items[i - 1]) {
                itemElement.innerText = data.items[i - 1];
            }
        }

        // Update status aktif pada kartu pilihan di atas
        document.querySelectorAll('.service-card').forEach(card => {
            card.classList.remove('active-service');
        });
        document.getElementById(`btn-${serviceKey}`).classList.add('active-service');

        wrapper.style.opacity = 1;
    }, 300);
}