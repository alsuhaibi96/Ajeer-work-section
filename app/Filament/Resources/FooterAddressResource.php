<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterAddressResource\Pages;
use App\Filament\Resources\FooterAddressResource\RelationManagers;
use App\Models\FooterAddress;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
class FooterAddressResource extends Resource
{
    protected static ?string $model = FooterAddress::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Footer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([   TextInput::make('label')->required(),
                TextInput::make('link')->required(),
   ])
               ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('id')->limit(10),
            TextColumn::make('label')->limit(10),
            TextColumn::make('link')->limit(20),
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
            'index' => Pages\ListFooterAddresses::route('/'),
            'create' => Pages\CreateFooterAddress::route('/create'),
            'edit' => Pages\EditFooterAddress::route('/{record}/edit'),
        ];
    }
}
