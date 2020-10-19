<?php


namespace Fh\RequestServer;


use Illuminate\Support\ServiceProvider;

class FhRequestServerProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/rqsrv.php', 'rqsrv'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/rqsrv.php' => config_path('rqsrv.php')
        ], 'rqsrv');
    }
}