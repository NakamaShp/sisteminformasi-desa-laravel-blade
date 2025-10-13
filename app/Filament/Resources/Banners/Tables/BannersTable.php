<?php

namespace App\Filament\Resources\Banners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\ImageColumn;

class BannersTable
{
    protected static ?string $navigationGroup = 'Berita';
    public static function configure(Table $table): Table
    {


        return $table
            ->columns([
                TextColumn::make('news.title')
                    ->label('Judul Berita')
                    ->limit(70)
                    ->tooltip(fn($state) => html_entity_decode(strip_tags($state)))
                    ->formatStateUsing(fn($state) => html_entity_decode(strip_tags($state))), // batasi hanya 50 karakter
                ImageColumn::make('news.thumbnail')
                    ->label('Gambar'),
                TextColumn::make('news.newscategory.title')
                    ->label('Kategori Berita'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()
                    ->label('Lihat'),
                EditAction::make(),
                DeleteAction::make()
                    ->label('Hapus'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                    ->label('Hapus Massal'),
                ]),
            ]);
    }
}
