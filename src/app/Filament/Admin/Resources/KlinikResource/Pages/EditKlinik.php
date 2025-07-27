<?php

namespace App\Filament\Admin\Resources\KlinikResource\Pages;

use App\Filament\Admin\Resources\KlinikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKlinik extends EditRecord
{
    protected static string $resource = KlinikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
