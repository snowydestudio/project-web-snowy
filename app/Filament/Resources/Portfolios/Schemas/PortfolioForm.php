<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Judul Proyek')->required(),
                TextInput::make('industry')->label('Industri')->required(),
                TextInput::make('services')->label('Layanan')->required(),
                
                // PASTIKAN ADA ->disk('public') DI BAGIAN INI
                FileUpload::make('image')
                    ->label('Gambar Portofolio')
                    ->image()
                    ->disk('public')         // <-- PENTING AGAR MASUK KE STORAGE PUBLIK
                    ->directory('portfolios')
                    ->required(),
                    
                Textarea::make('result')
                    ->label('Hasil (Result)')
                    ->rows(4)
                    ->required(),
            ]);
    }
}