<?php


namespace App\Http\Services\Warehouse;


trait Catalog
{
    protected $model;

    function __construct()
    {
        $this->model = 'App\Model\Product';
    }
}
