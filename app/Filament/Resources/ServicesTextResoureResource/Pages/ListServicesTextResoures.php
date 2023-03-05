<?php

namespace App\Filament\Resources\ServicesTextResoureResource\Pages;

use App\Filament\Resources\ServicesTextResoureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesTextResoures extends ListRecords
{
    protected static string $resource = ServicesTextResoureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
