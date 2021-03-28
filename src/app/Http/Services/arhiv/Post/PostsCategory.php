<?php


namespace App\Http\Services\Post;


use App\Model\Category;

class PostsCategory
{

    public function getPostsCategory($category)
    {
//        $category_id = Category::where('slug', $category)->first()->id;

//    СДЕЛАТЬ ЖАДНУЮ ЗАГРУЗКУ
//        return Product::with($category)?????
        return Category::where('slug', $category)
            ->with('product')
            ->orderBy('id', 'desc')
            ->paginate(6);
    }
}
