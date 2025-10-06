<?php

namespace App\Filament\Resources\Banners\Pages;

use App\Filament\Resources\Banners\BannersResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBanners extends EditRecord
{
    protected static string $resource = BannersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
