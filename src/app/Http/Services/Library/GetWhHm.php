<?php


namespace App\Http\Services\Library;


abstract class GetWhHm
{
    public function getWhHm($param)
    {
        return $this->model::where('id', $param)
            ->with($this->withEntity)
            ->get();
    }
}
