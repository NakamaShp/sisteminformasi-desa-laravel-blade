<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')->required(),
                TextInput::make('email')->required()->email(),
                TextInput::make('subjek'),
                Textarea::make('pesan')->required()->rows(5),
            ]);
    }
}
