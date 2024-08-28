<?php

namespace YourNamespace\Resources\MenuItemResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use YourNamespace\Resources\MenuItemResource;

class CreateMenuItem extends CreateRecord
{
    protected static string $resource = MenuItemResource::class;
}
