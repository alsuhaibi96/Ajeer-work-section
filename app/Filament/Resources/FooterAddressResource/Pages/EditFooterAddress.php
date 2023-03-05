<?php

namespace App\Filament\Resources\FooterAddressResource\Pages;

use App\Filament\Resources\FooterAddressResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFooterAddress extends EditRecord
{
    protected static string $resource = FooterAddressResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
