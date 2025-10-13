<?php

namespace App\Filament\Resources\Banners;

use App\Filament\Resources\Banners\Pages\CreateBanner;
use App\Filament\Resources\Banners\Pages\CreateBanners;
use App\Filament\Resources\Banners\Pages\EditBanner;
use App\Filament\Resources\Banners\Pages\EditBanners;
use App\Filament\Resources\Banners\Pages\ListBanners;
use App\Filament\Resources\Banners\Schemas\BannerForm;
use App\Filament\Resources\Banners\Schemas\BannersForm;
use App\Filament\Resources\Banners\Tables\BannersTable;
use App\Models\Banner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BannersResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Photo;
    protected static string|\UnitEnum|null $navigationGroup = 'Berita & Informasi';
    protected static ?string $navigationLabel = 'Banner Berita';
    protected static ?string $recordTitleAttribute = 'Banner';
    public static function getPluralLabel(): ?string
    {
        return 'Banner';
    }

    public static function getLabel(): ?string
    {
        return 'Banner';
    }

    public static function form(Schema $schema): Schema
    {
        return BannersForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BannersTable::configure($table);
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
            'index' => ListBanners::route('/'),

        ];
    }
}
