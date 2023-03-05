<?php

namespace App\Filament\Resources\FooterServicesResource\Pages;

use App\Filament\Resources\FooterServicesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFooterServices extends ListRecords
{
    protected static string $resource = FooterServicesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
