<?php


namespace App\Http\Services\Library;


abstract class GetWhHmCount
{
    public function getWhHmCount($param)
    {
        return $this->model::where('id', $param)
            ->with(
                [$this->withEntity => function($query) {
                    $query->withCount($this->countEntity);
                }]
            )
            ->get();
    }
}
