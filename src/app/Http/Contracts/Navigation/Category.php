<?php


namespace App\Http\Contracts\Navigation;


interface Category
{
    public function create($data);
    public function getAll();
    public function update($param, $data);
    public function delete($param);
}
