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
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Confyans\RequestStatistics\RequestStatisticsController');
    }
}
