<?php

namespace Vahidv\Todolist;

use Illuminate\Support\ServiceProvider;

class TodolistServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'todolist');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vahidv/todolist'),
            __DIR__.'/TodoListConfig.php' => config_path('TodoListConfig.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Vahidv\Todolist\TaskController');
    }
}
