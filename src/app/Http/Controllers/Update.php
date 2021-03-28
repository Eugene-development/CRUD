<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait Update
{
    public function update(Request $request)
    {
        $param = $request->id;
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];
        $container = app();
        $container->make($this->entity)->update($param, $data);
        return $data;
    }

}
