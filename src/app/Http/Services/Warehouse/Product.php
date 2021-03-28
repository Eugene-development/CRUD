<?php


namespace App\Http\Services\Warehouse;


trait Product
{
    protected $model;

    function __construct()
    {
        $this->model = 'App\Model\Product';
    }
}
