<?php


namespace App\Http\Controllers\Navigation\Rubric;


use App\Http\Contracts\Navigation\Rubric;
use App\Http\Controllers\Controller;

class RubricController extends Controller
{
    protected $entity;

    function __construct()
    {
        $this->entity = Rubric::class;
    }
}
