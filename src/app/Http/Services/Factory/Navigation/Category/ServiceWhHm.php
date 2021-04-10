<?php


namespace App\Http\Services\Factory\Navigation\Category;


use App\Http\Services\Library\GetWhHm;
use App\Http\Services\Warehouse\Category;

class ServiceWhHm extends GetWhHm
{
    use Category;
    protected $withEntity = 'seo';

}
