<?php


namespace App\Http\Services\Post;


use App\Model\Post;

class PostsAll
{
    public function getPostsAll()
    {
        return Post::all();
    }
}
