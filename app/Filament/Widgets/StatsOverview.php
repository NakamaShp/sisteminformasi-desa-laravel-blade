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
            // PENGADUAN MASUK
            Stat::make('Pengaduan Masuk', Pengaduan::where('status', 'Pending')->count())
                ->description('Jumlah Pengaduan yang Masuk ')
                ->descriptionIcon('heroicon-m-clipboard-document-list')
                ->color('danger')
                ->extraAttributes([
                    'class' => 'h-full flex flex-col justify-between'
                ]),

            // PENGADUAN DIPROSES
            Stat::make('Pengaduan Diproses', Pengaduan::where('status', 'Diproses')->count())
                ->description('Pengaduan yang sedang diproses')
                ->descriptionIcon('heroicon-m-exclamation-triangle')
                ->color('warning')
                ->extraAttributes([
                    'class' => 'h-full flex flex-col justify-between'
                ]),

            // PENGADUAN SELESAI
            Stat::make('Pengaduan Selesai', Pengaduan::where('status', 'selesai')->count())
                ->description('Pengaduan yang sudah ditangani')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success')
                ->extraAttributes([
                    'class' => 'h-full flex flex-col justify-between'
                ]),

            // TOTAL PENGADUAN
            Stat::make('Total Pengaduan', Pengaduan::count())
                ->description('Jumlah total semua pengaduan  ')
                ->descriptionIcon('heroicon-m-clipboard-document-list')
                ->color('primary')
                ->extraAttributes([
                    'class' => 'h-full flex flex-col justify-between'
                ]),
        ];
    }

    // Tambahan opsional: bikin tampil melebar penuh dan grid-nya rapi
    protected function getColumns(): int
    {
        return 4; // 4 kolom rata
    }

    protected int|string|array $columnSpan = 'full'; // biar lebarnya penuh ke kanan
}
