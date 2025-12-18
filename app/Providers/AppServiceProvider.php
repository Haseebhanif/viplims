<?php

namespace App\Providers;

use App\Http\Controllers\GeneralSettingsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $base_url = request()->getSchemeAndHttpHost();
        if (env('APP_URL') != $base_url ) {
            $home = new GeneralSettingsController();
            $home->setEnvironmentValue(['APP_URL'=> $base_url,'PRODUCT_URL'=>$base_url]);
        }
    }
}
