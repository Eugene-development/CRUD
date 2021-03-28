<?php


namespace App\Http\Services\Warehouse;


trait Category
{
    protected $model;

    function __construct()
    {
        $this->model = 'App\Model\Category';
    }
}
