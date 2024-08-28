# Laravel Filament Menu

This package provides dynamic menu items for the Filament admin panel with CRUD functionality.

## Installation

```bash
composer require your-namespace/laravel-filament-menu
```

## Usage

After installing the package, publish the configuration and run the installation command:

```bash
php artisan vendor:publish --provider="YourNamespace\Providers\MenuServiceProvider"
php artisan migrate
php artisan menu:install
```

To manage menu items from the admin panel:

1. Navigate to the Menu Items section in Filament.
2. Use the provided CRUD interface to add, edit, or delete menu items.

To refresh menu items after making changes:

```bash
php artisan menu:refresh
```

This will set up the menu items in your database and configure the Filament navigation.
