<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PortfolioController; // Panggil PortfolioController yang baru

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda mendaftarkan semua rute (URL) untuk website pengunjung (Frontend).
| CATATAN PENTING:
| Anda TIDAK PERLU lagi menulis rute untuk /login, /logout, atau /admin di sini.
| Semua rute Admin & Autentikasi sudah ditangani 100% secara otomatis oleh Filament!
|
*/

// ================= FRONTEND =================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/proses-kerja', [HomeController::class, 'prosesKerja'])->name('proses.kerja');
Route::get('/hubungi-kami', [HomeController::class, 'hubungiKami'])->name('hubungi.kami');

// Route khusus untuk halaman Portofolio menggunakan controller yang benar
Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portofolio');