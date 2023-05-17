<?php

namespace App\Providers;

use App\Models\Country;
use App\Repositories\StatisticsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->when(StatisticsRepository::class)
            ->needs(Model::class)
            ->give(Country::class)
        ;
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
