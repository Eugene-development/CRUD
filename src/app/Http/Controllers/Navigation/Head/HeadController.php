<?php


namespace App\Http\Controllers\Navigation\Head;


use App\Http\Contracts\Navigation\Head;
use App\Http\Controllers\Controller;

class HeadController extends Controller
{
    protected $entity;

    function __construct()
    {
        $this->entity = Head::class;
    }
}
