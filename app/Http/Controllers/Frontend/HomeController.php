<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Memanggil file resources/views/frontend/index.blade.php
        return view('frontend.index');
    }
}