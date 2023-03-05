<?php

namespace App\Filament\Resources\PreparationSectionResource\Pages;

use App\Filament\Resources\PreparationSectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPreparationSections extends ListRecords
{
    protected static string $resource = PreparationSectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
