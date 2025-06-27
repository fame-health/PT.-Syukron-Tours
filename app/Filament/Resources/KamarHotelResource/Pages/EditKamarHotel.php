<?php

namespace App\Filament\Resources\KamarHotelResource\Pages;

use App\Filament\Resources\KamarHotelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKamarHotel extends EditRecord
{
    protected static string $resource = KamarHotelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
