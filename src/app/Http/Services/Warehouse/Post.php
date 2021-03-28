<?php


namespace App\Http\Services\Warehouse;


trait Post
{
    protected $model;

    function __construct()
    {
        $this->model = 'App\Model\Post';
    }

}
