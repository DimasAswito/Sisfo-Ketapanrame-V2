<?php

namespace App\Filament\Resources\TempatMakanResource\Pages;

use App\Filament\Resources\TempatMakanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTempatMakans extends ListRecords
{
    protected static string $resource = TempatMakanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
