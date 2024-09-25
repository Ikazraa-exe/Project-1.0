<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;

use Filament\Actions\Action;

use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected static ?string $title = 'Buat Pengguna Baru';
    
    protected static ?string $breadcrumb = 'Buat';
    
    protected static bool $canCreateAnother = false;

    protected ?string $heading = 'Buat Pengguna Baru';

    protected function getCreateFormAction(): Action
    {
        return parent::getCreateFormAction()
            ->label('Buat Akun');
    }
    
    // protected function getCreateAnotherFormAction(): Action
    // {
    //     return parent::getCreateAnotherFormAction()
    //         ->label('Buat dan buat akun lagi')
    //         ->color('warning');
    // }
    
    protected function getCancelFormAction(): Action
    {
        return parent::getCancelFormAction()
            ->label('Batal')
            ->color('danger');
    }
}
