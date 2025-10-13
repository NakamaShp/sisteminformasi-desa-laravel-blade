<?php

namespace App\Filament\Resources\PotensiDesas\Pages;

use App\Filament\Resources\PotensiDesas\PotensiDesaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPotensiDesas extends ListRecords
{
    protected static string $resource = PotensiDesaResource::class;

    protected static ?string $Label = 'Potensi Desa';
    protected function getHeaderActions(): array
    {
        return [

            CreateAction::make(),
        ];
    }
}
