<?php


namespace App\Http\Controllers\Navigation\Menu;


use App\Http\Contracts\Navigation\Menu;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    protected $entity;

    function __construct()
    {
        $this->entity = Menu::class;
    }
}
