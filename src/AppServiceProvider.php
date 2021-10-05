<?php

namespace LaravelEnso\Algolia;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Algolia\Console\Import;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->commands(Import::class);
    }
}
