<?php

namespace App\Providers;

use App\Jobs\MyJob;
use Illuminate\Support\ServiceProvider;

class MyJobProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bindMethod(MyJob::class.'@handle', function ($job, $app) {
            return $job->handle();
        });
    }

    public function boot(): void
    {
        //
    }
}
