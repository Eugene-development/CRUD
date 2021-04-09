<?php


namespace App\Http\Services\Factory\Navigation\Menu;


use App\Http\Services\Library\GetAllHm;
use App\Http\Services\Warehouse\Menu;

class ServiceAllHm extends GetAllHm
{
    use Menu;
    protected $withEntity = 'seo';
}
