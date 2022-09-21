<?php

namespace DevOption\Helio\FeatureRequest;

use Illuminate\Support\ServiceProvider;

class HelioFeatureRequestProvider extends ServiceProvider
{
    /**
     * Register the package services.
     * 
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services
     * 
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
    }

}