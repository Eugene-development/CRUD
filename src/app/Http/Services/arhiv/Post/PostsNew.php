<?php


namespace App\Http\Services\Post;


use App\Model\Post;

class PostsNew
{
    public function getPostsNew()
    {
        return Post::where('new', 1)->orderBy('id', 'desc')->get();
    }
}
