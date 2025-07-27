<?php

namespace App\Filament\Admin\Resources\KlinikResource\Pages;

use App\Filament\Admin\Resources\KlinikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKliniks extends ListRecords
{
    protected static string $resource = KlinikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
