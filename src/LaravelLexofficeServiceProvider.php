<?php

namespace Nanuc\LaravelLexoffice;

use Illuminate\Support\ServiceProvider;

class LaravelLexofficeServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('lexoffice-api', fn() => new LaravelLexofficeFactory());
    }
}
