<?php

namespace App\Filament\Resources\BeritaResource\Pages;

use App\Filament\Resources\BeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;

class CreateBerita extends CreateRecord
{
    
    protected static string $resource = BeritaResource::class;
    
    protected static ?string $title = 'Buat Berita';
    
    protected static ?string $breadcrumb = 'Buat';
    
    // protected static bool $canCreateAnother = false;
    
    // protected static ?string $heading = 'Buat Berita';

    protected function getCreateFormAction(): Action
    {
        return parent::getCreateFormAction()
            ->label('Buat Berita');
    }
    
    protected function getCreateAnotherFormAction(): Action
    {
        return parent::getCreateAnotherFormAction()
            ->label('Buat dan buat berita lagi')
            ->color('warning');
    }
    
    protected function getCancelFormAction(): Action
    {
        return parent::getCancelFormAction()
            ->label('Batal')
            ->color('danger');
    }
}