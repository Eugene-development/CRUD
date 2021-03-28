<?php


namespace App\Http\Services\Warehouse;


trait User
{
    protected $model;

    function __construct()
    {
        $this->model = 'App\Model\User';
    }
}
