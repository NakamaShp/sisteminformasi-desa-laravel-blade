<?php

namespace App\Filament\Resources\DokumenDesas\Pages;

use App\Filament\Resources\DokumenDesas\DokumenDesaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDokumenDesas extends ListRecords
{
    protected static string $resource = DokumenDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
