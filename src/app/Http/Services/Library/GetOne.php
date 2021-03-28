<?php


namespace App\Http\Services\Library;


abstract class GetOne
{
    public function getOne($param)
    {
//        return $this->model::where('id', $param)
//            ->first();

                return $this->model::where('id', $param)->with(['category', 'image'])->get();
    }
}
