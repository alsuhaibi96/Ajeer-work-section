<?php

namespace App\Filament\Resources\PricingPackagesResource\Pages;

use App\Filament\Resources\PricingPackagesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPricingPackages extends ListRecords
{
    protected static string $resource = PricingPackagesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
