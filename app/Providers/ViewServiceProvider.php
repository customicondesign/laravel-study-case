<?php

namespace App\Providers;

use App\Products;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $test = new \stdClass();
        $test->name ="bill test name";
        $test->title = "bill test title";
        View()->share('global_site_setting', $test);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
