<?php

namespace App\Filament\Resources\HomeBanners;

use App\Filament\Resources\HomeBanners\Pages\CreateHomeBanner;
use App\Filament\Resources\HomeBanners\Pages\EditHomeBanner;
use App\Filament\Resources\HomeBanners\Pages\ListHomeBanners;
use App\Filament\Resources\HomeBanners\Schemas\HomeBannerForm;
use App\Filament\Resources\HomeBanners\Tables\HomeBannersTable;
use App\Models\HomeBanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;

class HomeBannerResource extends Resource
{
    protected static ?string $model = HomeBanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|\UnitEnum|null $navigationGroup = 'Halaman Depan';


    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                // PASTIKAN FIELD 'title' ADA DI SINI
                Forms\Components\TextInput::make('title')
                    ->required() // Membuat field wajib diisi
                    ->maxLength(255),

                // PASTIKAN FIELD 'image' JUGA ADA DI SINI
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->image()
                    ->directory(directory: 'banners')
                    ->disk('public'),

                // Field lainnya
                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->default(0),

                Forms\Components\Toggle::make('is_active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // 1. Kolom Gambar (Media)
                Tables\Columns\ImageColumn::make('image')
                    ->label('Banner')
                    ->disk('public')
                    ->square()
                    ->visibility('visible'),


                // 2. Kolom Judul (Teks Utama)
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul Banner')
                    ->searchable() // Memungkinkan pencarian berdasarkan judul
                    ->sortable(),  // Memungkinkan pengurutan

                // 3. Kolom Urutan
                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),

                // 4. Kolom Status Aktif (Toggle)
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean() // Menampilkan ikon (centang/silang)
                    ->sortable(),

                // 5. Kolom Waktu Pembuatan (Opsional)
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), // Sembunyikan secara default
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHomeBanners::route('/'),
            'create' => CreateHomeBanner::route('/create'),
            'edit' => EditHomeBanner::route('/{record}/edit'),
        ];
    }
}
