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

        //
    }
}
