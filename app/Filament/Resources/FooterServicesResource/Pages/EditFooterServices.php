<?php

namespace App\Filament\Resources\FooterServicesResource\Pages;

use App\Filament\Resources\FooterServicesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFooterServices extends EditRecord
{
    protected static string $resource = FooterServicesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
