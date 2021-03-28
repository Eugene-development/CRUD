<?php


namespace App\Http\Services\Library;


abstract class GetAll
{
    public function getAll()
    {
        return $this->model::all();
    }

}


//    Перенести в другой сервис
//    public function getNavigation()
//    {
//        return MenuController::with(['head.rubric.category' => function($query) {
//            $query->withCount('product');
//            $query->with('seo');
//        }, 'seo'])->get();
//    }



//        MenuController::all();
//        DB::select('SELECT * FROM navigation_menu');
//        DB::select('SELECT * FROM `production_product`');
//        Product::all();
//        $time = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
//        echo $time . ' секунд.';


//        dd(DB::select('SELECT * FROM navigation_menu'));
//        return MenuController::all();




//        if ($request->file('image')) {
//
//            Image::make($request->file('image'))
//                ->fit(400, 300, function ($img) {
//                    $img->upsize();
//                })
//                ->save(public_path('/img/product/' . $data['img']));
//        }


//        MenuController::where('id', $id)->delete();



//        return DB::connection('mysql')->select('SELECT * FROM nvg_menu');
