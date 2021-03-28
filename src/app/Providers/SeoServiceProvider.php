<?php


namespace App\Providers;


use App\Http\Contracts\SeoContract;
use App\Http\Services\Seo\ReposytorySeo;
use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SeoContract::class, ReposytorySeo::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
