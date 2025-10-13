<?php

namespace App\Filament\Resources\DokumenDesas;

use App\Filament\Resources\DokumenDesas\Pages\CreateDokumenDesa;
use App\Filament\Resources\DokumenDesas\Pages\EditDokumenDesa;
use App\Filament\Resources\DokumenDesas\Pages\ListDokumenDesas;
use App\Filament\Resources\DokumenDesas\Schemas\DokumenDesaForm;
use App\Filament\Resources\DokumenDesas\Tables\DokumenDesasTable;
use App\Models\DokumenDesa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DokumenDesaResource extends Resource
{
    protected static ?string $model = DokumenDesa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::DocumentArrowUp;
    protected static string|\UnitEnum|null $navigationGroup = 'Informasi Layanan';



    public static function getPluralLabel(): ?string
    {
        return 'Dokumen Desa';
    }

    public static function getLabel(): ?string
    {
        return 'Dokumen Desa';
    }

    public static function form(Schema $schema): Schema
    {
        return DokumenDesaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DokumenDesasTable::configure($table);
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
            'index' => ListDokumenDesas::route('/'),

        ];
    }
}
