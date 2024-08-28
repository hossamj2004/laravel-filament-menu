<?php

namespace LarvelFilamentMenu\Providers;

use Illuminate\Support\ServiceProvider;
use LarvelFilamentMenu\Models\MenuItem;
use Filament\Facades\Filament;

class MenuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMenuItems();
    }

    protected function loadMenuItems()
    {
        // Fetch menu items from the database
        $menuItems = MenuItem::whereNull('parent_id')->get(); // Top-level items
        $subMenuItems = MenuItem::whereNotNull('parent_id')->get(); // Sub-items

        $menu = [];

        foreach ($menuItems as $item) {
            $menu[] = [
                'label' => $item->label,
                'icon' => $item->icon,
                'url' => $item->url,
                'items' => $subMenuItems->where('parent_id', $item->id)->map(function ($subItem) {
                    return [
                        'label' => $subItem->label,
                        'url' => $subItem->url,
                    ];
                })->toArray(),
            ];
        }

        // Configure Filament navigation
        Filament::navigation($menu);
    }
}
