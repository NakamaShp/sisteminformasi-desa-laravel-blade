<?php

namespace App\Filament\Resources\NewsCategories\Pages;

use App\Filament\Resources\NewsCategories\NewsCategoriesResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsCategories extends CreateRecord
{
    protected static string $resource = NewsCategoriesResource::class;
}
