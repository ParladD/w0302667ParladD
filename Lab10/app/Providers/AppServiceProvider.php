<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Billing\Stripe;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.archive', function ($view){

            $view->with('archives',\App\Post::archives());
            $view->with('tags',\App\Tag::has('posts')->pluck('name'));


        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(Strip::class,function (){

            return new \App\Billing\Stripe(config('services.stripe.secret'));

        });


    }
}
