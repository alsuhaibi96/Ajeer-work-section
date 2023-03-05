<?php

namespace App\Filament\Resources\ServicesImagesResource\Pages;

use App\Filament\Resources\ServicesImagesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesImages extends ListRecords
{
    protected static string $resource = ServicesImagesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
