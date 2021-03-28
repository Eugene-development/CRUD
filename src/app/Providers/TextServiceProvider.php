<?php


namespace App\Providers;


use App\Http\Contracts\Text\Text;
use App\Http\Services\Factory\Text\TextRepository;
use Illuminate\Support\ServiceProvider;

class TextServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Text::class, TextRepository::class);
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
