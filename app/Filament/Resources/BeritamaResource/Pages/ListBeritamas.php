<?php

namespace App\Filament\Resources\BeritamaResource\Pages;

use App\Filament\Resources\BeritamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBeritamas extends ListRecords
{
    protected static string $resource = BeritamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Buat Berita')
        ];
    }
}
