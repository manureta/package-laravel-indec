<?php

namespace ManuReta\indec;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__.'/../config/indec.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('indec.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'indec'
        );

        $this->app->bind('indec', function () {
            return new indec();
        });
    }
}
