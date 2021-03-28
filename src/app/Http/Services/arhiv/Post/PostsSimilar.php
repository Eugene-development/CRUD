<?php


namespace App\Http\Services\Post;


use App\Model\Post;

class PostsSimilar
{
    public function getPostsSimilar()
    {
        return Post::where('similar', 1)->orderBy('id', 'desc')->get();
    }

}
