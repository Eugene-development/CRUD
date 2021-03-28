<?php


namespace App\Http\Services\Library;


abstract class GetWh
{
    public function getWh($param)
    {
        return $this->model::where('id', $param)
            ->all();
    }

}
