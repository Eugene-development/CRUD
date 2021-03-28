<?php


namespace App\Http\Services\Factory\Navigation\Category;


use App\Http\Contracts\Navigation\Category;
use App\Http\Services\Factory\Repository;

final class CategoryRepository extends Repository implements Category
{
    protected $path = 'Factory\Navigation\Category';

    protected $serviceAll;
    protected $serviceCreate;
    protected $serviceUpdate;
    protected $serviceDelete;

    public function __construct()
    {
        $this->serviceAll = app('App\Http\Services\\' . $this->path . '\ServiceAll');
        $this->serviceCreate = app('App\Http\Services\\' . $this->path . '\ServiceCreate');
        $this->serviceUpdate = app('App\Http\Services\\' . $this->path . '\ServiceUpdate');
        $this->serviceDelete = app('App\Http\Services\\' . $this->path . '\ServiceDelete');
    }

}
