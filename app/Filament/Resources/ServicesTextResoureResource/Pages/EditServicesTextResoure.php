<?php

namespace App\Filament\Resources\ServicesTextResoureResource\Pages;

use App\Filament\Resources\ServicesTextResoureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicesTextResoure extends EditRecord
{
    protected static string $resource = ServicesTextResoureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
