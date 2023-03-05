<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([

                NavigationGroup::make()
                    ->label('Hero Section')
                    ->icon('heroicon-s-bookmark'),

                    NavigationGroup::make()
                    ->label('Services')
                    ->icon('heroicon-s-bookmark'),

                    NavigationGroup::make()
                    ->label('Prepare and Oraganize')
                    ->icon('heroicon-o-document-text'),

                    NavigationGroup::make()
                    ->label('Packages')
                    ->icon('heroicon-o-document-text'),




                    NavigationGroup::make()
                    ->label('Call To Action')
                    ->icon('heroicon-o-document-text'),

                    NavigationGroup::make()
                     ->label('Footer')
                     ->icon('heroicon-o-document-text')
                     ->collapsed(),
            ]);
        });


    }
}
