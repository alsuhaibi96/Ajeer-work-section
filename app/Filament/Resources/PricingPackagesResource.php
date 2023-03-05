<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PricingPackagesResource\Pages;
use App\Filament\Resources\PricingPackagesResource\RelationManagers;
use App\Models\PricingPackages;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;


class PricingPackagesResource extends Resource
{
    protected static ?string $model = PricingPackages::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Packages';


    public static function form(Form $form): Form
    {
        return $form
        ->schema([

            Section::make('Title')
            ->schema([
                RichEditor::make('title')->required(),
            ])
            ->collapsible(),

            Section::make('Price')
            ->schema([
                RichEditor::make('price')
                ->required(),

            ])
            ->collapsible(),

            Section::make('Currency')
            ->schema([
                RichEditor::make('currency')->required(),
            ])
            ->collapsible(),


            Section::make('Period')
            ->schema([
                RichEditor::make('period')->required(),
            ])
            ->collapsible(),


            Section::make('Feature One')
            ->schema([
                RichEditor::make('feature_one')->required(),
            ])
            ->collapsible(),


            Section::make('Feature Two')
            ->schema([
                RichEditor::make('feature_two')->required(),
            ])
            ->collapsible(),



            Section::make('Feature Three')
            ->schema([
                RichEditor::make('feature_three')->required(),
            ])
            ->collapsible(),


            Section::make('Feature Four')
            ->schema([
                RichEditor::make('feature_four')->required(),
            ])
            ->collapsible(),


            Section::make('Feature Five')
            ->schema([
                RichEditor::make('feature_five')->required(),
            ])
            ->collapsible(),


            Section::make('Feature Six')
            ->schema([
                RichEditor::make('feature_six')->required(),
            ])
            ->collapsible(),


            TextInput::make('subscribe_label')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('id')->limit(10),
                TextColumn::make('title')->limit(10),
                TextColumn::make('price')->limit(20),
                TextColumn::make('currency')->limit(20),
                TextColumn::make('period')->limit(20),
                TextColumn::make('feature_one')->limit(20),
                TextColumn::make('feature_two')->limit(20),
                TextColumn::make('feature_three')->limit(20),
                TextColumn::make('feature_four')->limit(20),
                TextColumn::make('feature_five')->limit(20),
                TextColumn::make('feature_six')->limit(20),
                TextColumn::make('subscribe_label')->limit(20),

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
            'index' => Pages\ListPricingPackages::route('/'),
            'create' => Pages\CreatePricingPackages::route('/create'),
            'edit' => Pages\EditPricingPackages::route('/{record}/edit'),
        ];
    }
}
