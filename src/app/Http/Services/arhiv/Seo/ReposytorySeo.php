<?php


namespace App\Http\Services\Seo;


use App\Http\Contracts\SeoContract;
use App\Http\Services\Navigation\Navigation;

class ReposytorySeo implements SeoContract
{
    private $seo;

    public function __construct()
    {
        $this->seo = app(Seo::class);
    }

    public function getSeo()
    {
        return $this->seo->getSeo();
    }

}
