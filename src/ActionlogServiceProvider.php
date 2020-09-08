<?php

namespace Henri\Actionslog;

use Illuminate\Support\ServiceProvider;

class ActionlogServiceProvider extends ServiceProvider
{
    /**
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    /**
    * Register any application services.
    *
    * @return void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/actionslog.php', 'actionslog'
        );

    }

    /**
    * Bootstrap any application services.
    *
    * @return void
    */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\Install::class,
            ]);

            $this->publishes([
                __DIR__.'/../config/Actionslog.php' => config_path('Actionslog.php')
            ], 'config');
        }

        $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'actionslog');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}
