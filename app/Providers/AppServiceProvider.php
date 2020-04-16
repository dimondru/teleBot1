<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Laravel\TelegramServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public $bindings = [

        Telegram::class => TelegramServiceProvider::class
    ];

    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
