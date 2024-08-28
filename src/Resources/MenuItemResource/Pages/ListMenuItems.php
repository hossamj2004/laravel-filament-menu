<?php

namespace LarvelFilamentMenu\Resources\MenuItemResource\Pages;

use Filament\Resources\Pages\ListRecords;
use LarvelFilamentMenu\Resources\MenuItemResource;

class ListMenuItems extends ListRecords
{
    protected static string $resource = MenuItemResource::class;
}
