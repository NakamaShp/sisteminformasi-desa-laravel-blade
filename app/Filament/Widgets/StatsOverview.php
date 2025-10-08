<?php

namespace App\Filament\Widgets;

use App\Models\Pengaduan;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Bagian statistik user yang tidak relevan telah dihapus.

            // STATISTIK PENGADUAN
            Stat::make('Total Pengaduan', Pengaduan::count())
                ->description('Jumlah semua pengaduan yang masuk')
                ->descriptionIcon('heroicon-m-clipboard-document-list')
                ->color('primary'),

            Stat::make('Pengaduan Baru', Pengaduan::where('status', 'baru')->count())
                ->description('Pengaduan yang belum diproses')
                ->descriptionIcon('heroicon-m-exclamation-triangle')
                ->color('warning'),

            Stat::make('Pengaduan Selesai', Pengaduan::where('status', 'selesai')->count())
                ->description('Pengaduan yang sudah ditangani')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),
        ];
    }
}
