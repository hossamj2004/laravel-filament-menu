<?php

namespace YourNamespace\Resources\MenuItemResource\Pages;

use Filament\Resources\Pages\ListRecords;
use YourNamespace\Resources\MenuItemResource;

class ListMenuItems extends ListRecords
{
    protected static string $resource = MenuItemResource::class;
}
