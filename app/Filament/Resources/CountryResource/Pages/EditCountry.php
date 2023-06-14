<?php

namespace App\Filament\Resources\CountryResource\Pages;

use Filament\Pages\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\CountryResource;

class EditCountry extends EditRecord
{
    protected static string $resource = CountryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Country Updated')
            ->body('The country has been updated successfully.');
    }
}
