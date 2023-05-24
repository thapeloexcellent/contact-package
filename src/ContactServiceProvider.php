<?php

namespace Thapelo\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'contact');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/views' => base_path('resources/views'),
            ], 'views');
        }

    }

    public function register()
    {
       //
    }
}