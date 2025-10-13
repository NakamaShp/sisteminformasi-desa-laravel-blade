<?php

namespace App\Filament\Resources\PotensiDesas\Pages;

use App\Filament\Resources\PotensiDesas\PotensiDesaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPotensiDesa extends EditRecord
{
    protected static string $resource = PotensiDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
