<?php

namespace zepson\africastalking;

use Illuminate\Support\ServiceProvider;
class SmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
    $this->app->make('zepson\africastalking\SmsController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->publishes([
            __DIR__.'/../config/zepson_africastalking.php' => config_path('zepson_africastalking.php'),
        ], 'africastalking_config');

        //
    }
}
