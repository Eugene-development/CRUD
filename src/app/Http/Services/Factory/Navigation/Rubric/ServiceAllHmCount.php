<?php


namespace App\Http\Services\Factory\Navigation\Rubric;


use App\Http\Services\Library\GetAllHmCount;
use App\Http\Services\Warehouse\Rubric;

class ServiceAllHmCount extends GetAllHmCount
{
    use Rubric;
    protected $withEntity = 'category';
    protected $countEntity = 'product';
}
