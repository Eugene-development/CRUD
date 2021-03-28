<?php


namespace App\Http\Services\Library;


abstract class Update
{
    public function update($param, $data)
    {
        $this->model::find($param)
            ->update($data);
    }
}
