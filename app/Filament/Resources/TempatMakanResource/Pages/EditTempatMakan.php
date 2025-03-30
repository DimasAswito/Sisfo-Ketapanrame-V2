<?php

namespace App\Filament\Resources\TempatMakanResource\Pages;

use App\Filament\Resources\TempatMakanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTempatMakan extends EditRecord
{
    protected static string $resource = TempatMakanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
