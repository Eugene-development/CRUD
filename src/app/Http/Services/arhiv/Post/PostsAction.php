<?php


namespace App\Http\Services\Post;


use App\Model\Post;

class PostsAction
{
    public function getPostsAction()
    {
        return Post::where('аction', 1)->orderBy('id', 'desc')->get();
    }
}
