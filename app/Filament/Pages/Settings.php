<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;

class Settings extends Page
{
    protected static string|\BackedEnum|null $navigationIcon = Heroicon::AdjustmentsHorizontal;
    protected string $view = 'filament.pages.settings';
    protected static ?string $navigationLabel = 'Pengaturan';
}
