<?php

namespace LarvelFilamentMenu\Console;

use Illuminate\Console\Command;
use LarvelFilamentMenu\Models\MenuItem;

class InstallMenu extends Command
{
    protected $signature = 'menu:install';
    protected $description = 'Install menu items.';

    public function handle()
    {
        // Create default menu items
        MenuItem::updateOrCreate(['label' => 'Dashboard'], ['url' => '/dashboard', 'icon' => 'heroicon-o-home']);
        MenuItem::updateOrCreate(['label' => 'Admin'], ['url' => '/admin', 'icon' => 'heroicon-o-cog']);

        $this->info('Menu items installed successfully.');
    }
}
