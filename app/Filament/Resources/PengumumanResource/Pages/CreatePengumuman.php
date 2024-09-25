<?php

namespace App\Filament\Resources\PengumumanResource\Pages;

use App\Filament\Resources\PengumumanResource;
use Filament\Actions\action;
use Filament\Resources\Pages\CreateRecord;

class CreatePengumuman extends CreateRecord
{

    
    protected static string $resource = PengumumanResource::class;
    
    protected static ?string $title = 'Buat Pengumuman';
    
    protected static ?string $breadcrumb = 'Buat';
    
    // protected static bool $canCreateAnothe = false;
    
    protected ?string $heading = 'Buat Pengumuman';

    protected function getCreateFormAction(): Action
    {
        return parent::getCreateFormAction()
            ->label('Buat Pengumuman');
    }
    
    protected function getCreateAnotherFormAction(): Action
    {
        return parent::getCreateAnotherFormAction()
            ->label('Buat dan buat pengumuman lagi')
            ->color('warning');
    }
    
    protected function getCancelFormAction(): Action
    {
        return parent::getCancelFormAction()
            ->label('Batal')
            ->color('danger');
    }
}
