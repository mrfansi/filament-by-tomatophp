<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class PlatformSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'platform:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to setup the first time';


    /**
     * @var string[]
     */
    protected array $commands = [
        'filament-users:publish',
        'filament-accounts:install',
        'filament-alerts:install',
        'filament-bookmarks-menu:install',
        'filament-browser:install',
        'filament-cms:install',
        'filament-docs:install',
        'filament-ecommerce:install',
        'filament-fcm:install',
        'filament-icons:install',
        'filament-invoices:install',
        'filament-language-switcher:install',
        'filament-locations:install',
    ];

    protected array $tags = [
        'filament-accounts-model',
        'filament-accounts-config',

        'filament-alerts-config',
        'filament-alerts-views',
        'filament-alerts-lang',
        'filament-alerts-migrations',

        'filament-bookmarks-menu-config',
        'filament-bookmarks-menu-views',
        'filament-bookmarks-menu-lang',
        'filament-bookmarks-menu-migrations',

        'filament-browser-config',
        'filament-browser-views',
        'filament-browser-lang',
        'filament-browser-migrations',

        'filament-cms-config',
        'filament-cms-views',
        'filament-cms-lang',
        'filament-cms-migrations',

        'filament-api-config',

        'filament-artisan-config',
        'filament-artisan-views',
        'filament-artisan-lang',

        'filament-developer-gate-config',
        'filament-developer-gate-views',
        'filament-developer-gate-lang',
        'filament-developer-gate-migrations',

        'filament-discord-config',

        'filament-docs-config',
        'filament-docs-views',
        'filament-docs-lang',
        'filament-docs-migrations',

        'filament-ecommerce-config',
        'filament-ecommerce-views',
        'filament-ecommerce-lang',
        'filament-ecommerce-migrations',

        'filament-fcm-config',
        'filament-fcm-views',
        'filament-fcm-migrations',

        'filament-icons-config',
        'filament-icons-views',

        'filament-invoices-config',
        'filament-invoices-views',
        'filament-invoices-lang',
        'filament-invoices-migrations',

        'filament-language-switcher-config',
        'filament-language-switcher-views',
        'filament-language-switcher-lang',
        'filament-language-switcher-migrations',

        'filament-locations-config',
        'filament-locations-views',
        'filament-locations-lang',
        'filament-locations-migrations',
    ];

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        foreach ($this->commands as $command) {
            $this->callSilently($command);
            $packageName = Str::beforeLast($command, ':');
            $actionName = match (Str::afterLast($command, ':')) {
                'install' => 'installed',
                'publish' => 'published',
            };

            $this->info("Successfully $actionName $packageName");
        }

        foreach ($this->tags as $tag) {
            $this->callSilently('vendor:publish', ['--tag' => $tag]);
            $this->info("Successfully published $tag");
        }
    }
}
