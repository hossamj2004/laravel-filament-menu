<?php

namespace YourNamespace\Console\Commands;

use Illuminate\Console\Command;
use YourNamespace\Providers\MenuServiceProvider;

class RefreshMenuItems extends Command
{
    protected $signature = 'menu:refresh';
    protected $description = 'Refresh the menu items in Filament.';

    public function handle()
    {
        // Trigger the menu loading process
        app(MenuServiceProvider::class)->loadMenuItems();

        $this->info('Menu items refreshed successfully.');
    }
}
