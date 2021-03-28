<?php

namespace App\Providers;

use App\Http\Contracts\Navigation\Menu;
use App\Http\Contracts\Navigation\Head;
use App\Http\Contracts\Navigation\Rubric;
use App\Http\Contracts\Navigation\Category;
use App\Http\Services\Factory\Navigation\Menu\MenuRepository;
use App\Http\Services\Factory\Navigation\Head\HeadRepository;
use App\Http\Services\Factory\Navigation\Rubric\RubricRepository;
use App\Http\Services\Factory\Navigation\Category\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Menu::class, MenuRepository::class);
        $this->app->bind(Head::class, HeadRepository::class);
        $this->app->bind(Rubric::class, RubricRepository::class);
        $this->app->bind(Category::class, CategoryRepository::class);
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
