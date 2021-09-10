<?php

namespace evertonbarreto\laravel_modulos;

use Illuminate\Support\ServiceProvider;
use src\Commands\Modulo;

class LaravelModulosServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            Modulo::class
        ]);
    }
    public function register()
    {

    }
}