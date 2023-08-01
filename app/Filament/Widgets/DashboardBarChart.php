<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class DashboardBarChart extends ChartWidget
{
    protected static ?string $heading = 'Added Product';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Monthly added Product',
                    'data' => [100, 120, 300, 150, 200, 300, 250, 200, 500, 350, 600, 100],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
