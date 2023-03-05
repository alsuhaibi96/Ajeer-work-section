<?php

namespace App\Filament\Resources\PricingPackagesResource\Pages;

use App\Filament\Resources\PricingPackagesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPricingPackages extends EditRecord
{
    protected static string $resource = PricingPackagesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
