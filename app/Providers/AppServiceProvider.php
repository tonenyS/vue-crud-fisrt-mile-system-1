<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\Planing;
use App\Observers\PlanningObserver;
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

        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }



        Planing::observe(PlanningObserver::class);
    }
}
