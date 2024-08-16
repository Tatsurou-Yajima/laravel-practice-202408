<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // サーバー起動時に実行される
        config([
            'sample.data' => ['こんにちは', 'どうも', 'さようなら'],
        ]);
    }
}
