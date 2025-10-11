<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\CustomAccount;
use App\Filament\Widgets\HomeButton;
use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatsOverview;
use Filament\Support\Icons\Heroicon;
use Termwind\Components\Hr;

class Dashboard extends BaseDashboard
{
    protected static string|\BackedEnum|null $navigationIcon = Heroicon::Squares2x2;

    // Hanya widget buatanmu sendiri
    public function getWidgets(): array
    {
        return [

            HomeButton::class,
            StatsOverview::class,
        ];
    }
}
