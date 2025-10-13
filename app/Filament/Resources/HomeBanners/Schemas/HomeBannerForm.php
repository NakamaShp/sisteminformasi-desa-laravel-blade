<?php

namespace App\Filament\Resources\HomeBanners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HomeBannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul')
                    ->required() // Membuat field wajib diisi
                    ->maxLength(255),

                TextInput::make('order')
                    ->label('Urutan Ke-')
                    ->numeric()
                    ->default(1),
                // PASTIKAN FIELD 'image' JUGA ADA DI SINI
                FileUpload::make('image')
                    ->label('Gambar')
                    ->required()
                    ->image()
                    ->directory(directory: 'banners')
                    ->disk('public'),

                // Field lainnya

                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),
            ]);
    }
}
