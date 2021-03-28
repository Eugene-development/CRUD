<?php


namespace App\Http\Controllers\Seo;


use App\Http\Contracts\SeoContract;
use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;


class SeoController extends Controller
{
    public function seo()
    {
        $container = app();
        $seo = $container->make(SeoContract::class)
            ->getSeo();

        return new Resource($seo);
    }
}
