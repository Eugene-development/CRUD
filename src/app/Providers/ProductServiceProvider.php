<?php

namespace App\Providers;

use App\Http\Contracts\Catalog;
use App\Http\Services\Factory\Catalog\CatalogRepository;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Catalog::class, CatalogRepository::class);
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
