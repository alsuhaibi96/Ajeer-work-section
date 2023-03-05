<?php

namespace App\Filament\Resources\ServicesImagesResource\Pages;

use App\Filament\Resources\ServicesImagesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicesImages extends EditRecord
{
    protected static string $resource = ServicesImagesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
