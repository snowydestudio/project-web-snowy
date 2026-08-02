<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class PortfolioInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('image')->label('Gambar Portofolio'),
                TextEntry::make('title')->label('Judul Proyek')->weight('bold'),
                TextEntry::make('industry')->label('Industri'),
                TextEntry::make('services')->label('Layanan')->badge()->color('success'),
                
                // TEKS HASIL DITAMBAHKAN
                TextEntry::make('result')
                    ->label('Hasil (Result)'),
            ]);
    }
}