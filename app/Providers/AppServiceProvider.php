<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Nedwors\Navigator\Facades\Nav;

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


        // main menu
        Nav::define(fn () => [
            Nav::item(__('About Us'))
                ->for(route('about')),
            Nav::item(__('Contact Us'))
                ->for(route('contact')),
        ],'main');
    }
}
