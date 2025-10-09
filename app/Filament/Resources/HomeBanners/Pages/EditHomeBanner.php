<?php

namespace App\Filament\Resources\HomeBanners\Pages;

use App\Filament\Resources\HomeBanners\HomeBannerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomeBanner extends EditRecord
{
    protected static string $resource = HomeBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
