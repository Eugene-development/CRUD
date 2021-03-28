<?php


namespace App\Http\Services\Factory\Navigation\Head;


use App\Http\Contracts\Navigation\Head;
use App\Http\Services\Factory\Repository;

final class HeadRepository extends Repository implements Head
{
    protected $path = 'Factory\Navigation\Head';

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
