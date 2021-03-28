<?php


namespace App\Http\Services\Warehouse;


trait Text
{
    protected $model;

    function __construct()
    {
        $this->model = 'App\Model\Text';
    }
}
