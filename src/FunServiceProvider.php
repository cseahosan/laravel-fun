<?php

namespace Ahosan\Fun;

use Illuminate\Support\ServiceProvider;

class FunServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'fun');

        $this->publishes([
            __DIR__.'/../stubs/assets' => public_path('vendor/fun'),
        ], 'fun-assets');
    }
}
