<?php

namespace App\Filament\Resources\DokumenDesas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DokumenDesaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')->label('Nama Dokumen')->required(),
                FileUpload::make('file')
                    ->label('File PDF')
                    ->directory('dokumen')
                    ->acceptedFileTypes(['application/pdf'])
                    ->required(),
            ]);
    }
}
