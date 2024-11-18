<?php

namespace panchania83\UploadcareImage;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('uploadcare-image', __DIR__.'/../dist/js/field.js');
            Nova::style('uploadcare-image', __DIR__.'/../dist/css/field.css');
        });

        $this->publishes([
        __DIR__.'/../src/config/uploadcare.php' => config_path('uploadcare.php')
        ], 'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
