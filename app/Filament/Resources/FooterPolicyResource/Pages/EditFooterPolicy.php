<?php

namespace App\Filament\Resources\FooterPolicyResource\Pages;

use App\Filament\Resources\FooterPolicyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFooterPolicy extends EditRecord
{
    protected static string $resource = FooterPolicyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
