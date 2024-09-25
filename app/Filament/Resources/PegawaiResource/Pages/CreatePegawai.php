<?php

namespace App\Filament\Resources\PegawaiResource\Pages;

use App\Filament\Resources\PegawaiResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreatePegawai extends CreateRecord
{
    protected static string $resource = PegawaiResource::class;
    protected static ?string $title = 'Buat Data Pegawai';

    protected static ?string $breadcrumb = 'Buat';
    
    // protected static bool $canCreateAnothe = false;
    protected ?string $heading = 'Buat Data Pegawai';
    protected function getCreateFormAction(): Action
    {
        return parent::getCreateFormAction()
            ->label('Buat Data Pegawai');
    }
    
    protected function getCreateAnotherFormAction(): Action
    {
        return parent::getCreateAnotherFormAction()
            ->label('Buat dan buat data pegawai lagi')
            ->color('warning');
    }
    
    protected function getCancelFormAction(): Action
    {
        return parent::getCancelFormAction()
            ->label('Batal')
            ->color('danger');
    }
}
