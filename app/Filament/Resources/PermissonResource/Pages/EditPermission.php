<?php

namespace App\Filament\Resources\PermissonResource\Pages;

use App\Filament\Resources\PermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPermission extends EditRecord
{
    protected static string $resource = PermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected  function getRedirectUrl():string
    {
        return PermissionResource::getUrl('index');
    }
    protected function getSavedNotificationTitle():string
    {
        return 'User Edited Successfully!';
    }
}
