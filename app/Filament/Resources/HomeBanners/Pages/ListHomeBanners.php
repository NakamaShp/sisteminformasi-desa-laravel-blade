<?php

namespace App\Filament\Resources\HomeBanners\Pages;

use App\Filament\Resources\HomeBanners\HomeBannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeBanners extends ListRecords
{
    protected static string $resource = HomeBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
