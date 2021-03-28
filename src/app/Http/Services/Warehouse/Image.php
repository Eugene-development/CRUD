<?php


namespace App\Http\Services\Warehouse;


trait Image
{
    protected $model;

    function __construct()
    {
        $this->model = 'App\Model\Image';
    }
}
