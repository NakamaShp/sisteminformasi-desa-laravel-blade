<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatsOverview;
use Filament\Support\Icons\Heroicon;

class Dashboard extends BaseDashboard
{
    protected static string|\BackedEnum|null $navigationIcon = Heroicon::Squares2x2;

    // Hanya widget buatanmu sendiri
    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}
