<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

trait Delete
{
    public function delete(Request $request)
    {
        $param = $request->id;
        $container = app();
        $container->make($this->entity)->delete($param);
        return $param;
    }
}
