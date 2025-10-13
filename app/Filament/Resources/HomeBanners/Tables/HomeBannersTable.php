<?php

namespace App\Filament\Resources\HomeBanners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomeBannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Banner')
                    ->disk('public')
                    ->square()
                    ->visibility('visible'),


                // 2. Kolom Judul (Teks Utama)
                TextColumn::make('title')
                    ->label('Judul Banner')
                    ->searchable() // Memungkinkan pencarian berdasarkan judul
                    ->sortable(),  // Memungkinkan pengurutan

                // 3. Kolom Urutan
                TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),
       

                // 4. Kolom Status Aktif (Toggle)
                IconColumn::make('is_active')
                    ->label('Aktif/Nonaktif')
                    ->boolean() // Menampilkan ikon (centang/silang)
                    ->sortable(),

                // 5. Kolom Waktu Pembuatan (Opsional)
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), // Sembunyikan secara default
            ])
        
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
