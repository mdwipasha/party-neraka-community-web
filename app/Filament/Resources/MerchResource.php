<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Merch;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MerchResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MerchResource\RelationManagers;

class MerchResource extends Resource
{
    protected static ?string $model = Merch::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $breadcrumb = 'Merchandise';

    protected static ?string $navigationLabel = 'Merchandise';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                ->label('Photo')
                ->image()
                ->directory('Gallery')
                ->columnSpanFull()
                ->required(),
                TextInput::make('name')
                ->label('Name'),
                TextInput::make('price')
                ->label('Price')
                ->numeric(),
                Textarea::make('description')
                ->label('Description')
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                ->label('Photo'),
                TextColumn::make('name')
                ->searchable()
                ->label('Name'),
                TextColumn::make('price')
                ->money('IDR')
                ->label('Price'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListMerches::route('/'),
            'create' => Pages\CreateMerch::route('/create'),
            'edit' => Pages\EditMerch::route('/{record}/edit'),
        ];
    }
}
