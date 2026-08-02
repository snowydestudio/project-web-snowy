<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan Halaman Utama (Landing Page)
     */
    public function index()
    {
        // Memanggil file resources/views/frontend/index.blade.php
        return view('frontend.index');
    }

    /**
     * Menampilkan Halaman Tentang Kami (About)
     */
    public function about()
    {
        // Memanggil file resources/views/frontend/about.blade.php
        return view('frontend.about');
    }

    /**
     * Menampilkan Halaman Layanan
     */
    public function layanan()
    {
        // Memanggil file resources/views/frontend/layanan.blade.php
        return view('frontend.services');
    }

    /**
     * Menampilkan Halaman Proses Kerja Kami
     */
    public function prosesKerja()
    {
        // Memanggil file resources/views/frontend/proses-kerja.blade.php
        return view('frontend.workflow');
    }

    /**
     * Menampilkan Halaman Portofolio
     */
    public function portofolio()
    {
        // Memanggil file resources/views/frontend/portofolio.blade.php
        return view('frontend.portofolio');
    }

    /**
     * Menampilkan Halaman Hubungi Kami
     */
    public function hubungiKami()
    {
        // Memanggil file resources/views/frontend/hubungi-kami.blade.php
        return view('frontend.hubungi-kami');
    }
}