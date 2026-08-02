<?php

namespace App\Filament\Resources\Portfolios\Tables;

// Import bawaan dari struktur Anda
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;

// TAMBAHAN: Import alat untuk menampilkan kolom di tabel
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class PortfoliosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->circular(), // Membuat gambarnya menjadi bulat
                    
                TextColumn::make('title')
                    ->label('Judul Proyek')
                    ->searchable() // Agar bisa dicari di kolom pencarian
                    ->sortable()   // Agar bisa diurutkan
                    ->weight('bold'),
                    
                TextColumn::make('industry')
                    ->label('Industri')
                    ->searchable(),
                    
                TextColumn::make('services')
                    ->label('Layanan')
                    ->badge()      // Membuat tampilannya seperti label warna
                    ->color('success')
                    ->searchable(),
            ])
            ->filters([
                // Kosongkan saja jika belum butuh filter khusus
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}