<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use App\Models\KamarHotel;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\Builder;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationLabel = 'Bookings';

    protected static ?string $modelLabel = 'Booking';

    protected static ?string $pluralModelLabel = 'Bookings';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Booking Information')
                    ->schema([
                        Forms\Components\Select::make('kamar_hotel_id')
                            ->label('Kamar Hotel')
                            ->relationship('kamarHotel', 'nama_kamar')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function (callable $set, $state) {
                                if ($state) {
                                    $kamarHotel = KamarHotel::find($state);
                                    if ($kamarHotel) {
                                        $set('harga_per_malam', $kamarHotel->harga_per_malam ?? 0);
                                    }
                                }
                            }),

                        Forms\Components\Select::make('user_id')
                            ->label('User')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Forms\Components\DatePicker::make('check_in_date')
                            ->label('Check In Date')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function (callable $get, callable $set, $state) {
                                $checkOut = $get('check_out_date');
                                if ($state && $checkOut) {
                                    self::calculateTotalPrice($get, $set);
                                }
                            }),

                        Forms\Components\DatePicker::make('check_out_date')
                            ->label('Check Out Date')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function (callable $get, callable $set, $state) {
                                $checkIn = $get('check_in_date');
                                if ($state && $checkIn) {
                                    self::calculateTotalPrice($get, $set);
                                }
                            })
                            ->after('check_in_date'),

                        Forms\Components\TextInput::make('total_price')
                            ->label('Total Price')
                            ->numeric()
                            ->prefix('Rp')
                            ->disabled()
                            ->dehydrated(),

                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                'pending' => 'Pending',
                                'confirmed' => 'Confirmed',
                                'checked_in' => 'Checked In',
                                'checked_out' => 'Checked Out',
                                'cancelled' => 'Cancelled',
                            ])
                            ->default('pending')
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('Guest Information')
                    ->schema([
                        Forms\Components\TextInput::make('guest_name')
                            ->label('Guest Name')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('guest_email')
                            ->label('Guest Email')
                            ->email()
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('guest_phone')
                            ->label('Guest Phone')
                            ->tel()
                            ->required()
                            ->maxLength(20),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('kamarHotel.nama_kamar')
                    ->label('Kamar Hotel')
                    ->sortable()
                    ->searchable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('User')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('guest_name')
                    ->label('Guest Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('guest_email')
                    ->label('Guest Email')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('guest_phone')
                    ->label('Guest Phone')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('check_in_date')
                    ->label('Check In')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('check_out_date')
                    ->label('Check Out')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('total_price')
                    ->label('Total Price')
                    ->money('IDR')
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'confirmed',
                        'primary' => 'checked_in',
                        'info' => 'checked_out',
                        'danger' => 'cancelled',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'checked_in' => 'Checked In',
                        'checked_out' => 'Checked Out',
                        'cancelled' => 'Cancelled',
                    ]),

                SelectFilter::make('kamar_hotel_id')
                    ->label('Kamar Hotel')
                    ->relationship('kamarHotel', 'nama_kamar')
                    ->searchable()
                    ->preload(),

                Tables\Filters\Filter::make('check_in_date')
                    ->form([
                        Forms\Components\DatePicker::make('check_in_from')
                            ->label('Check In From'),
                        Forms\Components\DatePicker::make('check_in_until')
                            ->label('Check In Until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['check_in_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('check_in_date', '>=', $date),
                            )
                            ->when(
                                $data['check_in_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('check_in_date', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }

    protected static function calculateTotalPrice(callable $get, callable $set): void
    {
        $checkIn = $get('check_in_date');
        $checkOut = $get('check_out_date');
        $kamarHotelId = $get('kamar_hotel_id');

        if ($checkIn && $checkOut && $kamarHotelId) {
            $kamarHotel = KamarHotel::find($kamarHotelId);
            if ($kamarHotel) {
                $checkInDate = new \DateTime($checkIn);
                $checkOutDate = new \DateTime($checkOut);
                $interval = $checkInDate->diff($checkOutDate);
                $nights = $interval->days;

                $totalPrice = $nights * $kamarHotel->harga_per_malam;
                $set('total_price', $totalPrice);
            }
        }
    }
}
