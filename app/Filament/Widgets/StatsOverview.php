<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
// use Filament\Support\Colors\Color;

class StatsOverview extends BaseWidget
{
    #Disabling lazy loading
    // protected static bool $isLazy = false;

    protected static ?string $pollingInterval = '10s';

    protected function getCards(): array
    {
        return [
            Card::make('Total Product Type', '1K')
            ->description('1% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color("success"),
            // Color::hex('#78b16d00')

            Card::make('Total Product', '5K')
            ->description('3% increase')
             ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger'),

            Card::make('Total Supplier', '5'),
            // ->description('3% increase')
            // ->descriptionIcon('heroicon-m-arrow-trending-up')
            // ->color('success'),            
            Card::make('Last Month Sales', '10M')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('primary')
        ];
    }
}
