<?php

namespace evertonbarreto\laravel_modulos;
use App\Console\Commands\Controller;
use App\Console\Commands\Model;
use App\Console\Commands\Modulo;
use Illuminate\Support\ServiceProvider;

class LaravelModulosServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            Controller::class,
            Model::class,
            Modulo::class
        ]);
    }
    public function register()
    {

    }
}