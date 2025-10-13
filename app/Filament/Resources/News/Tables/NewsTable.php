<?php

namespace App\Filament\Resources\News\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\ToggleColumn as ToogleColumn;

class NewsTable
{
    protected static ?string $navigationGroup = 'Berita';
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author.name')
                    ->label('Penulis'),
                TextColumn::make('newsCategory.title')
                    ->label('Kategori'),
                TextColumn::make('title')
                    ->label('Judul')
                    ->limit(30)
                    ->tooltip(fn($state) => html_entity_decode(strip_tags($state)))
                    ->formatStateUsing(fn($state) => html_entity_decode(strip_tags($state))), // batasi hanya 50 karakter
                ImageColumn::make('thumbnail')
                    ->label('Gambar'),
                TextColumn::make('content')
                    ->label('Konten')
                    ->limit(50)
                    ->tooltip(fn($state) => html_entity_decode(strip_tags($state)))
                    ->formatStateUsing(fn($state) => html_entity_decode(strip_tags($state))), // batasi hanya 50 karakter
                IconColumn::make('is_featured')
                    ->alignCenter()
                    ->label(' Berita Unggulan')
                    ->boolean() // Menampilkan ikon (centang/silang)




            ])
            ->filters([
                SelectFilter::make('author_id')
                    ->relationship('author', 'name')
                    ->label('Pilih Penulis'),
                SelectFilter::make('news_category_id')

                    ->relationship('newsCategory', 'title')
                    ->label('Pilih Kategori'),
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
