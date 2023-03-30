<?php

namespace App\Filament\Resources\HomePageResource\Pages;

use App\Filament\Resources\HomePageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomePage extends CreateRecord
{
    protected static string $resource = HomePageResource::class;
}
