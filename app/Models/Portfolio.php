<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    // INI YANG PALING PENTING! 
    // Mengizinkan kolom-kolom ini diisi oleh Filament
    protected $fillable = [
        'title',
        'industry',
        'services',
        'image',
        'challenge',
        'approach',
        'result',
    ];
}