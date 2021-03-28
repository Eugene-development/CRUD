<?php


namespace App\Http\Services\Library;


abstract class Create
{
    public function create($data)
    {
        return $this->model::create($data);
    }
}
