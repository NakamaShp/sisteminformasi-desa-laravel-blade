<?php

namespace App\Filament\Resources\DokumenDesas\Pages;

use App\Filament\Resources\DokumenDesas\DokumenDesaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDokumenDesa extends EditRecord
{
    protected static string $resource = DokumenDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
