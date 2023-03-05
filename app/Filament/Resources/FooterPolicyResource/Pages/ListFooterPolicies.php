<?php

namespace App\Filament\Resources\FooterPolicyResource\Pages;

use App\Filament\Resources\FooterPolicyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFooterPolicies extends ListRecords
{
    protected static string $resource = FooterPolicyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
