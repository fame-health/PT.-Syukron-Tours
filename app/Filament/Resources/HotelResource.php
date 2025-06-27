<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelResource\Pages;
use App\Filament\Resources\HotelResource\RelationManagers\KamarHotelsRelationManager;
use App\Models\Hotel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class HotelResource extends Resource
{
    protected static ?string $model = Hotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_hotel')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Hotel'),
                TextInput::make('slug')
                    ->required()
                    ->unique(Hotel::class, 'slug')
                    ->maxLength(255)
                    ->label('Slug'),
                Textarea::make('deskripsi')
                    ->required()
                    ->label('Deskripsi'),
                FileUpload::make('logo')
                    ->image()
                    ->directory('hotel-logos')
                    ->preserveFilenames()
                    ->nullable()
                    ->label('Logo Hotel'),
                Textarea::make('alamat')
                    ->required()
                    ->label('Alamat'),
                Select::make('bintang')
                    ->options([
                        1 => '1 Bintang',
                        2 => '2 Bintang',
                        3 => '3 Bintang',
                        4 => '4 Bintang',
                        5 => '5 Bintang',
                    ])
                    ->required()
                    ->label('Bintang'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_hotel')->label('Nama Hotel')->sortable()->searchable(),
                TextColumn::make('slug')->label('Slug')->sortable()->searchable(),
                ImageColumn::make('logo')->label('Logo')->circular(),
                TextColumn::make('bintang')->label('Bintang')->sortable(),
                TextColumn::make('alamat')->label('Alamat')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHotels::route('/'),
            'create' => Pages\CreateHotel::route('/create'),
            'edit' => Pages\EditHotel::route('/{record}/edit'),
        ];
    }
}
