<?php

namespace App\Filament\Resources\PermissonResource\Pages;

use App\Filament\Resources\PermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePermission extends CreateRecord
{
    protected static string $resource = PermissionResource::class;
    protected  function getRedirectUrl():string
    {
        return PermissionResource::getUrl('index');
    }
    protected function getCreatedNotificationTitle(): string
    {
        return "Permission Created Successfully!";
    }
}
