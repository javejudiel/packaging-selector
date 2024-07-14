<?php

namespace Javejudiel\PackagingSelector;

use Illuminate\Support\ServiceProvider;

class PackagingSelectorServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the package's services.
        $this->app->singleton('packaging-selector', function ($app) {
            return new PackagingSelector;
        });
    }

    public function boot()
    {
        // Any bootstrapping code if needed
    }
}
