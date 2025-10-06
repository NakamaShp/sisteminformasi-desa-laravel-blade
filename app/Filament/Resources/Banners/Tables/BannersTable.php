<?php

namespace App\Filament\Resources\Banners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\ImageColumn;

class BannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('news.title')
                    ->label('News Title')
                    ->limit(70)
                    ->tooltip(fn($state) => html_entity_decode(strip_tags($state)))
                    ->formatStateUsing(fn($state) => html_entity_decode(strip_tags($state))), // batasi hanya 50 karakter
                ImageColumn::make('news.thumbnail')
                    ->label('Thumbnail'),
                TextColumn::make('news.newscategory.title')
                    ->label('Category'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
