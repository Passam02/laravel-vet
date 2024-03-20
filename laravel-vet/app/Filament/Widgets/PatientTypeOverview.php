<?php

namespace App\Filament\Widgets;

use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Cats', Patient::query()->where('type', 'cat')->count()),
            Stat::make('Dogs', Patient::query()->where('type', 'dog')->count()),
            Stat::make('Rabbits', Patient::query()->where('type', 'rabbit')->count()),
            Stat::make('Turtles', Patient::query()->where('type', 'turtle')->count()),
            Stat::make('Guinea Pigs', Patient::query()->where('type', 'guineapig')->count()),
            Stat::make('Snakes', Patient::query()->where('type', 'snake')->count()),
            Stat::make('Fishes', Patient::query()->where('type', 'fish')->count()),
            Stat::make('Lizards', Patient::query()->where('type', 'lizard')->count()),
            Stat::make('Birds', Patient::query()->where('type', 'bird')->count()),
            Stat::make('Rats', Patient::query()->where('type', 'rat')->count()),
            Stat::make('Mices', Patient::query()->where('type', 'mice')->count()),
        ];
    }
}