<?php

//УДАЛИТЬ




namespace App\Http\Controllers\Navigation;


use App\Http\Contracts\NavigationContract;
use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NavigationController extends Controller
{
    public function get()
    {
        $container = app();
        $navigationMenu = $container
            ->make(NavigationContract::class)
            ->getNavigationMenu();
        return new Resource($navigationMenu);
    }

    public function add(Request $request) {

        $data = [
//            'id' => $request->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        $container = app();
        $responce = $container
            ->make(NavigationContract::class)
            ->createNavigationMenu($data);
        return $responce;
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        $container = app();
        $container
            ->make(NavigationContract::class)
            ->updateNavigationMenu($id, $data);
        return $data;
    }

    public function delete(Request $request)
    {
        $id = $request->id;

        $container = app();
        $container
            ->make(NavigationContract::class)
            ->deleteNavigationMenu($id);
        return $id;
    }
}



//    public $menu;
//
//    public function __construct(MenuController $menu)
//    {
//        $this->menu = $menu;
//    }


//        dd($request->all());
//        $validator = Validator::make($request->all(), [
//            'name' => 'required',
//        ]);
//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator)->withInput();
//        }









