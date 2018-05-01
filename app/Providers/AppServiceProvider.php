<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if(isset($_SERVER['REQUEST_URI']) ){
            $route = $_SERVER['REQUEST_URI'];
            $route_list = explode('/',$route);
            if(strpos($route_list[1],'?') == false)   View::share('route_name', $route_list[1]);
            else {
                $route_list = explode('?',$route_list[1]);
                View::share('route_name', $route_list[0]);
                $second_route_name = explode('=',$route_list[1]);
                View::share('second_route_name', $second_route_name[0]);
            }
        }
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
