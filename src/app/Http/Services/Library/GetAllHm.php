<?php


namespace App\Http\Services\Library;


abstract class GetAllHm
{
    public function getAllHm()
    {
        return $this->model::with($this->withEntity)
            ->get();
    }
}
