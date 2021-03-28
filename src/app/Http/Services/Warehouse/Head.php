<?php


namespace App\Http\Services\Warehouse;


trait Head
{
    protected $model;

    function __construct()
    {
        $this->model = 'App\Model\Head';
    }
}
