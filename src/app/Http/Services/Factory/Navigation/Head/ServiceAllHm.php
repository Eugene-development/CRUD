<?php


namespace App\Http\Services\Factory\Navigation\Head;


use App\Http\Services\Library\GetAllHm;
use App\Http\Services\Warehouse\Head;

class ServiceAllHm extends GetAllHm
{
    use Head;
    protected $withEntity = 'rubric';
}
