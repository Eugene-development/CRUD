<?php


namespace App\Http\Services\Library;


abstract class GetWhHmHmCount
{
    public function getWhHmHmCount($param)
    {
        return $this->model::where('id', $param)
            ->with([
                $this->firstEntity .".". $this->thirdEntity,
                $this->firstEntity .".". $this->secondEntity .".". 'image',
                $this->firstEntity => function($query) {
                    $query->withCount($this->secondEntity);
                },
            ])
            ->get();
    }
}
