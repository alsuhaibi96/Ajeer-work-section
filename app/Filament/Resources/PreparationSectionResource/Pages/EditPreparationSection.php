<?php

namespace App\Filament\Resources\PreparationSectionResource\Pages;

use App\Filament\Resources\PreparationSectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPreparationSection extends EditRecord
{
    protected static string $resource = PreparationSectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
