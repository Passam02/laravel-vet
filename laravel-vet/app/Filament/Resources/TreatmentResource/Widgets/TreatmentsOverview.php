<?php

namespace App\Filament\Resources\TreatmentResource\Widgets;

use App\Filament\Resources\TreatmentResource\Pages\ListTreatments;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use App\Models\Treatment;

class TreatmentsOverview extends BaseWidget
{
    use InteractsWithPageTable;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Treatments', $this->getPageTableRecords()->count()),
            Stat::make('Total Earned', $this->getPageTableRecords()->whereNotNull('price')->sum('price') . ' €'), // fix so it displays  the sum of all prices in treatments table.
        ];
    }

    protected function getTablePage(): string
    {
        return ListTreatments::class;
    }
}
