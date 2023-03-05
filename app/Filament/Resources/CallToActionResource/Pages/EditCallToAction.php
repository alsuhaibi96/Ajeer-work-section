<?php

namespace App\Filament\Resources\CallToActionResource\Pages;

use App\Filament\Resources\CallToActionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCallToAction extends EditRecord
{
    protected static string $resource = CallToActionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
