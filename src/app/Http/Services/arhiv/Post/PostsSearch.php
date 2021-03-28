<?php


namespace App\Http\Services\Post;


use App\Model\Post;

class PostsSearch
{
    public function getPostsSearch($search)
    {
        return Post::where('name', 'like', "%" . $search . "%")
            ->orWhere('description', 'like', "%" . $search . "%")
            ->orderBy('id', 'desc')
            ->paginate(100);
    }
}
