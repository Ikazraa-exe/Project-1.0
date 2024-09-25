<?php

namespace App\Filament\Resources\SocialMediaResource\Pages;

use App\Filament\Resources\SocialMediaResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateSocialMedia extends CreateRecord
{ 
    protected static string $resource = SocialMediaResource::class;
    
    protected static ?string $title = 'Buat Media Sosial';
    
    protected static ?string $breadcrumb = 'Buat';

    protected static bool $canCreateAnother = false;
    
    // protected ?string $heading = 'Buat Media Sosial';

    protected function getCreateFormAction(): Action
    {
        return parent::getCreateFormAction()
            ->label('Buat Postingan Media Sosial');
    }

    // protected function getCreateAnotherFormAction(): Action
    // {
    //     return parent::getCreateAnotherFormAction()
    //         ->label('Buat dan buat Postingan Media Sosial lagi')
    //         ->color('warning');
    // }

    protected function getCancelFormAction(): Action
    {
        return parent::getCancelFormAction()
            ->label('Batal')
            ->color('danger');
    }
}
