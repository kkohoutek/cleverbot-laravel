<?php

namespace Kkohoutek\Cleverbot;

use Cleverbot;
use Illuminate\Support\ServiceProvider;

class CleverbotServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/cleverbot.php' => config_path('cleverbot.php')]);
    }

    public function register()
    {
        $this->app->singleton(Cleverbot::class, fn () => new Cleverbot());
    }
}
