<?php

namespace App\Providers;

use App\Services\Encounter\EncounterService;
use Illuminate\Support\ServiceProvider;


class EncounterProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton(EncounterService::class, function() {
            return new EncounterService();
        });

        $this->app->alias(EncounterService::class, 'encounter');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['encounter', EncounterService::class];
    }
}
