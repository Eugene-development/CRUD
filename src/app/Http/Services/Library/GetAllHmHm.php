<?php


namespace App\Http\Services\Library;


abstract class GetAllHmHm
{
    public function getAllHmHm()
    {
        return $this->model::with($this->withEntity . $this->subEntity)->get();
    }
}
