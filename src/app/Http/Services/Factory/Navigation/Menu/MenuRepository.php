<?php


namespace App\Http\Services\Factory\Navigation\Menu;


use App\Http\Contracts\Navigation\Menu;
use App\Http\Services\Factory\Repository;

class MenuRepository extends Repository implements Menu
{
    protected $path = 'Factory\Navigation\Menu';

    protected $serviceAll;
    protected $serviceAllHm;

    protected $serviceCreate;
    protected $serviceUpdate;
    protected $serviceDelete;

    public function __construct()
    {
        $this->serviceAll = app('App\Http\Services\\' . $this->path . '\ServiceAll');
        $this->serviceAllHm = app('App\Http\Services\\' . $this->path . '\ServiceAllHm');

        $this->serviceCreate = app('App\Http\Services\\' . $this->path . '\ServiceCreate');
        $this->serviceUpdate = app('App\Http\Services\\' . $this->path . '\ServiceUpdate');
        $this->serviceDelete = app('App\Http\Services\\' . $this->path . '\ServiceDelete');
    }
}
