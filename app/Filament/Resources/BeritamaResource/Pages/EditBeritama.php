<?php

namespace App\Filament\Resources\BeritamaResource\Pages;

use App\Filament\Resources\BeritamaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBeritama extends EditRecord
{
    protected static string $resource = BeritamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
            ->label('Hapus Berita')
        ];
    }
}
