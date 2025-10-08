<?php

namespace App\Filament\Resources\News\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\ToggleColumn as ToogleColumn;

class NewsTable
{
    protected static ?string $navigationGroup = 'Berita';
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author.name')
                    ->label('Author'),
                TextColumn::make('newsCategory.title')
                    ->label('Category'),
                TextColumn::make('title')
                    ->label('Title')
                    ->limit(30)
                    ->tooltip(fn($state) => html_entity_decode(strip_tags($state)))
                    ->formatStateUsing(fn($state) => html_entity_decode(strip_tags($state))), // batasi hanya 50 karakter
                ImageColumn::make('thumbnail')
                    ->label('Thumbnail'),
                TextColumn::make('content')
                    ->label('Content')
                    ->limit(50)
                    ->tooltip(fn($state) => html_entity_decode(strip_tags($state)))
                    ->formatStateUsing(fn($state) => html_entity_decode(strip_tags($state))), // batasi hanya 50 karakter
                ToogleColumn::make('is_featured')
                    ->label('Is Featured')



            ])
            ->filters([
                SelectFilter::make('author_id')
                    ->relationship('author', 'name')
                    ->label('Select Author'),
                SelectFilter::make('news_category_id')
                    ->relationship('newsCategory', 'title')
                    ->label('Select Category'),
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
