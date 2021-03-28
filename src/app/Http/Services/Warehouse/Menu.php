<?php


namespace App\Http\Services\Warehouse;


trait Menu
{
    protected $model;

    function __construct()
    {
        $this->model = 'App\Model\Menu';
    }
}
