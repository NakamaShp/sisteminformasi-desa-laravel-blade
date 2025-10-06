<?php

namespace App\Filament\Resources\Authors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;

class AuthorsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('username')
                    ->required(),
                FileUpload::make('avatar')
                    ->required(),

                TextArea::make('bio')
                    ->required()
                    ->rows(5), // default tinggi 5 baris

            ]);
    }
}
