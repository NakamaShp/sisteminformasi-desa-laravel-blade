<?php

namespace App\Filament\Resources\DokumenDesas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DokumenDesasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama Dokumen')->searchable(),
                TextColumn::make('file')
                    ->label('File')
                    ->url(fn($record) => asset('storage/' . $record->file))
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn($state) => basename($state)),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()
                    ->label('Lihat'),
                EditAction::make(),
                DeleteAction::make()
                    ->label('Hapus'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->label('Hapus Massal'),
                ]),
            ]);
    }
}
