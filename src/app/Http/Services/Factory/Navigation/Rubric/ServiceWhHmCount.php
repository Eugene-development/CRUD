<?php


namespace App\Http\Services\Factory\Navigation\Rubric;


use App\Http\Services\Library\GetWhHmCount;
use App\Http\Services\Warehouse\Rubric;

class ServiceWhHmCount extends GetWhHmCount
{
    use Rubric;
    protected $withEntity = 'category';
    protected $countEntity = 'product';
}
