<?php

namespace App\Filament\Resources\BeritamaResource\Pages;

use App\Filament\Resources\BeritamaResource;

use Filament\Actions\Action;

use Filament\Resources\Pages\CreateRecord;

class CreateBeritama extends CreateRecord
{
    protected static string $resource = BeritamaResource::class;
    
    protected static ?string $title = 'Buat Berita Mahkamah Agung';

    // protected ?string $heading = 'Buat Berita Mahkamah Agung';

    protected function getCreateFormAction(): Action
    {
        return parent::getCreateFormAction()
            ->label('Buat Berita MA');
    }
    
    protected function getCreateAnotherFormAction(): Action
    {
        return parent::getCreateAnotherFormAction()
            ->label('Buat dan buat berita MA lagi')
            ->color('warning');
    }
    
    protected function getCancelFormAction(): Action
    {
        return parent::getCancelFormAction()
            ->label('Batal')
            ->color('danger');
    }

}
