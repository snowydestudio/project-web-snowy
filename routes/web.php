<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah rute aplikasi web Anda didaftarkan.
|
*/

// Route untuk menampilkan Landing Page
Route::get('/', [HomeController::class, 'index']);