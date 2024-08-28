<?php

namespace YourNamespace\Resources;

use Filament\Resources\Resource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;
use YourNamespace\Models\MenuItem;

class MenuItemResource extends Resource
{
    public static $model = MenuItem::class;

    public static function form(Form $form)
    {
        return $form->schema([
            TextInput::make('label')->required(),
            TextInput::make('url')->required(),
            TextInput::make('icon')->nullable(),
            BelongsToSelect::make('parent_id')->relationship('parent', 'label')->nullable(),
        ]);
    }

    public static function table(Table $table)
    {
        return $table->columns([
            TextColumn::make('label'),
            TextColumn::make('url'),
            TextColumn::make('icon'),
            TextColumn::make('parent.label'),
        ])->filters([
            // Add filters here
        ]);
    }

    public static function routes(): array
    {
        return [
            ListRecords::class,
            CreateRecord::class,
            EditRecord::class,
        ];
    }
}
