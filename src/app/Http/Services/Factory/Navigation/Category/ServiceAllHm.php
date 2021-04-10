<?php


namespace App\Http\Services\Factory\Navigation\Category;


use App\Http\Services\Library\GetAllHm;
use App\Http\Services\Warehouse\Category;

class ServiceAllHm extends GetAllHm
{
    use Category;
    protected $withEntity = 'seo';
}
