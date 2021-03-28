<?php


namespace App\Http\Services\Factory\Navigation\Rubric;


use App\Http\Contracts\Navigation\Rubric;
use App\Http\Services\Factory\Repository;

final class RubricRepository extends Repository implements Rubric
{
    protected $path = 'Factory\Navigation\Rubric';

    protected $serviceAll;
    protected $serviceAllHmCount;
    protected $serviceWhHmCount;
    protected $serviceWhHmHmCount;

    protected $serviceCreate;
    protected $serviceUpdate;
    protected $serviceDelete;

    public function __construct()
    {
        $this->serviceAll        = app('App\Http\Services\\' . $this->path . '\ServiceAll');
        $this->serviceAllHmCount = app('App\Http\Services\\' . $this->path . '\ServiceAllHmCount');
        $this->serviceWhHmCount = app('App\Http\Services\\' . $this->path . '\ServiceWhHmCount');
        $this->serviceWhHmHmCount = app('App\Http\Services\\' . $this->path . '\ServiceWhHmHmCount');
        $this->serviceCreate     = app('App\Http\Services\\' . $this->path . '\ServiceCreate');
        $this->serviceUpdate     = app('App\Http\Services\\' . $this->path . '\ServiceUpdate');
        $this->serviceDelete     = app('App\Http\Services\\' . $this->path . '\ServiceDelete');
    }
}
