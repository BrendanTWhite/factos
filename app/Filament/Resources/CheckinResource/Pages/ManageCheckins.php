<?php

namespace App\Filament\Resources\CheckinResource\Pages;

use App\Filament\Resources\CheckinResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCheckins extends ManageRecords
{
    protected static string $resource = CheckinResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
