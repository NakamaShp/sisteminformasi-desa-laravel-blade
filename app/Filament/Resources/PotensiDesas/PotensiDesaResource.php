<?php

namespace App\Filament\Resources\PotensiDesas;

use App\Filament\Resources\PotensiDesas\Pages\CreatePotensiDesa;
use App\Filament\Resources\PotensiDesas\Pages\EditPotensiDesa;
use App\Filament\Resources\PotensiDesas\Pages\ListPotensiDesas;
use App\Filament\Resources\PotensiDesas\Schemas\PotensiDesaForm;
use App\Filament\Resources\PotensiDesas\Tables\PotensiDesasTable;
use App\Models\PotensiDesa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PotensiDesaResource extends Resource
{
    protected static ?string $model = PotensiDesa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::PresentationChartLine;
    protected static string|\UnitEnum|null $navigationGroup = 'Profil Desa';
    protected static ?string $navigationLabel = 'Potensi Desa';
    public static function getPluralLabel(): ?string
    {
        return 'Potensi Desa';
    }

    public static function getLabel(): ?string
    {
        return 'Potensi Desa';
    }


    public static function form(Schema $schema): Schema
    {
        return PotensiDesaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PotensiDesasTable::configure($table);
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
            'index' => ListPotensiDesas::route('/'),

        ];
    }
}
