<?php

namespace Nick\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('flash', function () {
            return $this->app->make('Flash\FlashMessage');
        });
    }

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '../views', 'flash');

        $this->publishes([
            __DIR__ . '../views' => base_path('resources/views/vendor/flash')
        ]);
    }
}