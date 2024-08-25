<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        app()->singleton(
            'App\MyClasses\MyServiceInterface',
            'App\MyClasses\MyService'
        );
        echo 'MyServiceProvider registered' . PHP_EOL;
    }

    public function boot(): void
    {
        //
    }
}
