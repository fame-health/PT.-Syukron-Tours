<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KamarHotelResource\Pages;
use App\Filament\Resources\KamarHotelResource\RelationManagers;
use App\Models\KamarHotel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class KamarHotelResource extends Resource
{
    protected static ?string $model = KamarHotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_hotel')
                    ->relationship('hotel', 'nama_hotel')
                    ->required()
                    ->label('Hotel'),
                FileUpload::make('images')
                    ->multiple()
                    ->image()
                    ->directory('kamar-images')
                    ->preserveFilenames()
                    ->maxFiles(5)
                    ->nullable()
                    ->label('Slide Images'),
                TextInput::make('nama_kamar')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Kamar'),
                Textarea::make('deskripsi')
                    ->required()
                    ->label('Deskripsi'),
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
                TextInput::make('harga')
                    ->numeric()
                    ->required()
                    ->prefix('Rp')
                    ->label('Harga'),
                TextInput::make('vendor_kategori')
                    ->required()
                    ->maxLength(255)
                    ->label('Kategori Vendor')
                    ->placeholder('Contoh: Standard, Premium'),
                TextInput::make('jumlah_kamar') // Ditambahkan
                    ->numeric()
                    ->required()
                    ->minValue(1)
                    ->maxValue(100)
                    ->default(1)
                    ->label('Jumlah Kamar')
                    ->helperText('Masukkan jumlah kamar yang tersedia untuk tipe ini.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hotel.nama_hotel')->label('Hotel')->sortable()->searchable(),
                TextColumn::make('nama_kamar')->label('Nama Kamar')->sortable()->searchable(),
                ImageColumn::make('images')->label('Images')->stacked()->limit(3),
                TextColumn::make('bintang')->label('Bintang')->sortable(),
                TextColumn::make('harga')->money('IDR')->label('Harga')->sortable(),
                TextColumn::make('vendor_kategori')->label('Kategori Vendor')->sortable(),
                TextColumn::make('jumlah_kamar')->label('Jumlah Kamar')->sortable(), // Ditambahkan
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKamarHotels::route('/'),
            'create' => Pages\CreateKamarHotel::route('/create'),
            'edit' => Pages\EditKamarHotel::route('/{record}/edit'),
        ];
    }
}
