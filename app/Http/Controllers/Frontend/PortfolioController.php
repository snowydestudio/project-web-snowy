<?php

namespace App\Http\Controllers\Frontend; // Perhatikan, ini Frontend, bukan Admin

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio; // Wajib panggil database

class PortfolioController extends Controller
{
    public function index()
    {
        // 1. Ambil data dari database (terbaru di atas)
        $portfolios = Portfolio::latest()->get();

        // 2. Kirim ke file desain HTML Anda. 
        // PASTIKAN NAMA 'portofolio' DI BAWAH INI SESUAI DENGAN NAMA FILE BLADE ANDA
        return view('frontend.portofolio', compact('portfolios')); 
    }
}