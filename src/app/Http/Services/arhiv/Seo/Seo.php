<?php


namespace App\Http\Services\Seo;

use App\Model\Menu;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use App\Model\Category;
use App\Model\Seo as MetaSeo;

class Seo
{
    public function getSeo()
    {
        return MetaSeo::all();
//        $activities = MetaTag::query()
//            ->with(['tagable' => function (MorphTo $morphTo) {
//                $morphTo->morphWith([
//                    Category::class => ['tag'],
//                    MenuController::class => ['tag'],
//                ]);
//            }])
//            ->where('tagable_id', 16)
//            ->get()
//        ;
//        return $activities;
    }
}
