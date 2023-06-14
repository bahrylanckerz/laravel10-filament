<?php

namespace App\Filament\Resources\StateResource\Pages;

use Filament\Pages\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\StateResource;

class EditState extends EditRecord
{
    protected static string $resource = StateResource::class;

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
            ->title('State Updated')
            ->body('The state has been updated successfully.');
    }
}
