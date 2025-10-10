<?php

namespace App\Filament\Resources\News\Pages;

use App\Filament\Resources\News\NewsResource;
use Filament\Resources\Pages\CreateRecord;

class _CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;
}
