<?php

namespace Confyans\RequestStatistics;

use Illuminate\Support\ServiceProvider;

class RequestStatisticsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->publishes([
            __DIR__.'/config/confyans.php' => config_path('confyans.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Confyans\RequestStatistics\RequestStatisticsController');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'confyans');
    }
}
