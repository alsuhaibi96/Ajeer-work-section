<?php

namespace App\Filament\Resources\CallToActionResource\Pages;

use App\Filament\Resources\CallToActionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCallToActions extends ListRecords
{
    protected static string $resource = CallToActionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
