<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;

// Import Resource dan Page Anda
use App\Filament\Pages\HomePageSettings;
use App\Filament\Resources\Authors\AuthorsResource;
use App\Filament\Resources\Categories\CategoryResource;
use App\Filament\Resources\News\NewsResource;
use App\Filament\Resources\NewsCategories\NewsCategoriesResource;
use App\Filament\Resources\Pages\PageResource;

class NavigationServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Filament::serving(function () {
            // Kita ganti dari ::navigation() menjadi ::registerNavigationGroups()
            Filament::registerNavigationGroups([
                NavigationGroup::make('Website')
                    ->items([
                        ...AuthorsResource::getNavigationItems(),
                        ...NewsResource::getNavigationItems(),
                        ...NewsCategoriesResource::getNavigationItems(),
                    ]),

                // Jika ada grup lain, tambahkan di sini sebagai elemen array berikutnya
                // NavigationGroup::make('Shop')->items([...]),
            ]);
        });
    }
}
