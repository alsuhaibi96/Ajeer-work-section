<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PreparationSectionResource\Pages;
use App\Filament\Resources\PreparationSectionResource\RelationManagers;
use App\Models\PreparationSection;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;

use Filament\Forms\Components\Section;

class PreparationSectionResource extends Resource
{
    protected static ?string $model = PreparationSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Prepare and Oraganize';



    public static function form(Form $form): Form
    {
        return $form
        ->schema([
         Card::make()->schema([
        TextInput::make('title')->required(),
        TextInput::make('sub_title')->required(),
         RichEditor::make('description')->required(),

         Section::make('Preperation Section Images')
         ->schema([
            FileUpload::make('main_img')
                 ->label('Main Image')
                 ->image()->maxSize(2024),

                 FileUpload::make('sub_img_one')
                 ->label('First Sub Image ')
                 ->image()->maxSize(2024),

                 FileUpload::make('sub_img_two')
                 ->label('Second Sub Image')
                 ->image()->maxSize(2024),

                 FileUpload::make('sub_img_three')
                 ->label('Third Sub Image')
                 ->image()->maxSize(2024),

         ])
         ->collapsible(),

])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('sub_title')->limit(20),
                TextColumn::make('description')->limit(20),

                ImageColumn::make('main_img')->square(),
                ImageColumn::make('sub_img_one')->square(),
                ImageColumn::make('sub_img_two')->square(),
                ImageColumn::make('sub_img_three')->square(),


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
            'index' => Pages\ListPreparationSections::route('/'),
            'create' => Pages\CreatePreparationSection::route('/create'),
            'edit' => Pages\EditPreparationSection::route('/{record}/edit'),
        ];
    }
}
