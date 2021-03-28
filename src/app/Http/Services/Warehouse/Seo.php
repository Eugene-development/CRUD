<?php


namespace App\Http\Services\Warehouse;


trait Seo
{
    protected $model;

    function __construct()
    {
        $this->model = 'App\Model\Seo';
    }
}
