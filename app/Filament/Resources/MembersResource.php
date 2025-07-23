<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Member;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MembersResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MembersResource\RelationManagers;
use Filament\Forms\Components\RichEditor;

class MembersResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $breadcrumb = 'Members';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Members';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                ->label('Profile Picture')
                ->image()
                ->directory('members')
                ->columnSpanFull(),
                TextInput::make('name')
                ->required()
                ->columnSpanFull(),
                RichEditor::make('bio')
                ->columnSpanFull(),
                TextInput::make('instagram')
                ->label('Link Instagram')
                ->required(),
                TextInput::make('tiktok')
                ->label('Link TikTok')
                ->required(),
                TextInput::make('youtube')
                ->label('Link Youtube')
                ->required(),
                TextInput::make('channel_id')
                ->label('ID Channel YouTube'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                ->label('Profile Picture'),
                TextColumn::make('name')
                ->searchable()
                ->label('Name'),
                TextColumn::make('instagram')
                ->label('Link Instagram'),
                TextColumn::make('youtube')
                ->label('Link Youtube'),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMembers::route('/create'),
            'edit' => Pages\EditMembers::route('/{record}/edit'),
        ];
    }
}
