<?php


namespace App\Http\Services\Factory\Text;


use App\Http\Contracts\Text\Text;
use App\Http\Services\Factory\Repository;

class TextRepository extends Repository implements Text
{
    protected $path = 'Factory\Text';

    protected $serviceAll;
//    protected $serviceCreate;
//    protected $serviceUpdate;
//    protected $serviceDelete;

    public function __construct()
    {
        $this->serviceAll = app('App\Http\Services\\' . $this->path . '\ServiceAll');
//        $this->serviceCreate = app('App\Http\Services\\' . $this->path . '\ServiceCreate');
//        $this->serviceUpdate = app('App\Http\Services\\' . $this->path . '\ServiceUpdate');
//        $this->serviceDelete = app('App\Http\Services\\' . $this->path . '\ServiceDelete');
    }

}
