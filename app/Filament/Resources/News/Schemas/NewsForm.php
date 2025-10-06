<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;


class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('author_id')
                    ->relationship('author', 'name')
                    ->required(),
                Select::make('news_category_id')
                    ->relationship('newsCategory', 'title')
                    ->required(),
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug')->readonly(),
                FileUpload::make('thumbnail')
                    ->required()
                    ->columnSpanFull()
                    ->disk('public')
                    ->visibility('public'),  // simpan ke storage/app/private/


                RichEditor::make('content')
                    ->required()
                    ->columnSpanfull()
                    ->extraAttributes(['style' => 'min-height: 300px;']),
                Toggle::make('is_featured')







            ]);
    }
}
