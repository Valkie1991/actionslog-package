<?php

namespace Henri\Actionslog;

use Illuminate\Support\ServiceProvider;

class ActionlogServiceProvider extends ServiceProvider
{
    /**
    * Register any application services.
    *
    * @return void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/activitylog.php', 'activitylog'
        );
    }

    /**
    * Bootstrap any application services.
    *
    * @return void
    */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/activitylog.php' => config_path('activitylog.php')
        ], 'activitylog');

        $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        $this->loadViewsFrom(__DIR__.'/views', 'actionslog');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}