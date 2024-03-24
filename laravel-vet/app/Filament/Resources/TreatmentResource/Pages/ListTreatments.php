<?php

namespace App\Filament\Resources\TreatmentResource\Pages;

use App\Filament\Resources\TreatmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Concerns\ExposesTableToWidgets;

class ListTreatments extends ListRecords
{
    use ExposesTableToWidgets;
    protected static string $resource = TreatmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    
    protected function getHeaderWidgets(): array
    {
        return [
            TreatmentResource\Widgets\TreatmentsOverview::class
        ];
    }
}
