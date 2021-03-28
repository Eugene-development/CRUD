<?php


namespace App\Providers;


use App\Http\Contracts\PostContract;
use App\Http\Services\Post\RepositoryPost;

class PostServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostContract::class, RepositoryPost::class);
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
