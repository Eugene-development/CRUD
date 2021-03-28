<?php


namespace App\Http\Services\Post;


use App\Model\Post;

class PostsBestseller
{
    public function getPostsBestseller()
    {
        return Post::where('bestseller', 1)->orderBy('id', 'desc')->get();
    }
}
