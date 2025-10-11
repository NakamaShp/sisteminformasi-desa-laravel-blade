<?php

namespace App\Filament\Widgets;

use App\Models\News;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class NewsOverview extends BaseWidget
{
    protected int|string|array $columnSpan = 'full'; // Lebar penuh

    protected function getStats(): array
    {
        $latestNews = News::latest()->first();

        return [
            // TOTAL BERITA
            Stat::make('Total Berita', News::count())
                ->description('Semua berita yang tersedia')
                ->descriptionIcon('heroicon-m-clipboard-document-list')
                ->color('primary')
                ->extraAttributes([
                    'class' => 'h-full flex flex-col justify-between'
                ]),

            // BERITA UNGGULAN
            Stat::make('Berita Unggulan', News::where('is_featured', true)->count())
                ->description('Berita yang ditandai unggulan')
                ->descriptionIcon('heroicon-m-star')
                ->color('warning')
                ->extraAttributes([
                    'class' => 'h-full flex flex-col justify-between'
                ]),

            // BERITA TERBARU
            Stat::make('Berita Terbaru', News::count() > 0 ? $latestNews->title : 'Tidak ada berita')
                ->description($latestNews ? 'Kategori: ' . $latestNews->newsCategory->title : 'Tidak ada berita')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('success')
                ->extraAttributes([
                    'class' => 'h-full flex flex-col justify-between'
                ]),
        ];
    }

    // Jumlah kolom grid
    protected function getColumns(): int
    {
        return 3;
    }
}
