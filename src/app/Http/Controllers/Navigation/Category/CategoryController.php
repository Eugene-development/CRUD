<?php


namespace App\Http\Controllers\Navigation\Category;


use App\Http\Contracts\Navigation\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $entity;

    function __construct()
    {
        $this->entity = Category::class;
    }
}
