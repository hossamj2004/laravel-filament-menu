<?php

namespace YourNamespace\Resources\MenuItemResource\Pages;

use Filament\Resources\Pages\EditRecord;
use YourNamespace\Resources\MenuItemResource;

class EditMenuItem extends EditRecord
{
    protected static string $resource = MenuItemResource::class;
}
