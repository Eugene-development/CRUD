<?php


namespace App\Http\Services\Factory\Navigation\Rubric;


use App\Http\Services\Library\GetWhHmHmCount;
use App\Http\Services\Warehouse\Rubric;

class ServiceWhHmHmCount extends GetWhHmHmCount
{
    use Rubric;
    protected $firstEntity = 'category';
    protected $secondEntity = 'product';
    protected $thirdEntity = 'text';
}
