<?php


namespace App\Http\Contracts\Text;


interface Text
{
    public function getAll();

    public function create($data);
    public function update($param, $data);
    public function delete($param);

}
