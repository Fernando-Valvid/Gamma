<?php

namespace App\Providers;

use App\Models\Clasificacion;
use App\Models\Menu;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        view()->composer(
            'layouts.app',
            function ($view) {
                $menus = Menu::where("status", true)->get();
                $view->with('menus', $menus);

            });
    }
}
