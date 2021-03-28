<?php


namespace App\Http\Services\Post;


use App\Model\Post;

class PostOne
{
    public function getPostOne($id)
    {
//        return Post::where('id', $id)->first();
//??????????????????????
        return Post::where('id', $id)->with('tag')->get();
    }
}
