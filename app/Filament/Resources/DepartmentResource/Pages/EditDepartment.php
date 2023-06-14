<?php

namespace App\Filament\Resources\DepartmentResource\Pages;

use Filament\Pages\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\DepartmentResource;

class EditDepartment extends EditRecord
{
    protected static string $resource = DepartmentResource::class;

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
            ->title('Department Updated')
            ->body('The department has been updated successfully.');
    }
}
