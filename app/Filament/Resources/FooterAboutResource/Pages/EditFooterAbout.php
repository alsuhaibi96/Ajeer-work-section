<?php

namespace App\Filament\Resources\FooterAboutResource\Pages;

use App\Filament\Resources\FooterAboutResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFooterAbout extends EditRecord
{
    protected static string $resource = FooterAboutResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
