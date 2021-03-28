<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait Create
{
    public function add(Request $request)
    {
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];
        $container = app();
        $response = $container->make($this->entity)->create($data);
        return $response;
    }
}
