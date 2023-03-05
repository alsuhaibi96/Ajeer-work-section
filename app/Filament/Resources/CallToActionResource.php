<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CallToActionResource\Pages;
use App\Filament\Resources\CallToActionResource\RelationManagers;
use App\Models\CallToAction;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\ImageColumn;


class CallToActionResource extends Resource
{
    protected static ?string $model = CallToAction::class;


    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Call To Action';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
             Card::make()->schema([   TextInput::make('title')->required(),
             RichEditor::make('description')->required(),
             TextInput::make('button_label')->required(),
])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->limit(10),
                TextColumn::make('title')->limit(10),
                TextColumn::make('description')->limit(20),
                TextColumn::make('button_label')->limit(20),
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
            'index' => Pages\ListCallToActions::route('/'),
            // 'create' => Pages\CreateCallToAction::route('/create'),
            'edit' => Pages\EditCallToAction::route('/{record}/edit'),
        ];
    }
}
