<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesImagesResource\Pages;
use App\Filament\Resources\ServicesImagesResource\RelationManagers;
use App\Models\ServicesImages;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;


class ServicesImagesResource extends Resource
{
    protected static ?string $model = ServicesImages::class;

    protected static ?string $navigationIcon = 'heroicon-o-plus-circle';
    protected static ?string $navigationGroup = 'Services';
    // protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('service_label')->required(),
                Section::make('Service Smaill Image')
                ->schema([
                   FileUpload::make('service_img')
                        ->label('Image')->maxSize(1024)

                ])
                ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('service_label'),
                ImageColumn::make('service_img')->disk('public')->square(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServicesImages::route('/'),
            'create' => Pages\CreateServicesImages::route('/create'),
            'edit' => Pages\EditServicesImages::route('/{record}/edit'),
        ];
    }
}
