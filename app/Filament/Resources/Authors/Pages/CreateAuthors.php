<?php

namespace App\Filament\Resources\Authors\Pages;

use App\Filament\Resources\Authors\AuthorsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAuthors extends CreateRecord
{
    protected static string $resource = AuthorsResource::class;
}
