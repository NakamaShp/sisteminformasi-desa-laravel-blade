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
    protected static ?string $navigationLabel = 'Banner Beranda';
    public static function getPluralLabel(): ?string
    {
        return 'Banner Beranda';
    }

    public static function getLabel(): ?string
    {
        return 'Banner Beranda';
    }


    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return HomeBannerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {

        return HomeBannersTable::configure($table);
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

        ];
    }
}
