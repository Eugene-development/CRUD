<?php


namespace App\Http\Services\Library;


abstract class Delete
{
    public function delete($param)
    {
        $this->model::find($param)
            ->delete();
    }
}
