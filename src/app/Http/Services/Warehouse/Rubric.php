<?php


namespace App\Http\Services\Warehouse;


trait Rubric
{
    protected $model;

    function __construct()
    {
        $this->model = 'App\Model\Rubric';
    }
}
