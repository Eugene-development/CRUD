<?php


namespace App\Http\Services\Post;


use App\Http\Contracts\PostContract;

class RepositoryPost implements PostContract
{

    private $postOne;
    private $postsAll;
    private $postsCategory;
    private $postsSearch;
    private $postsNew;
    private $postsAction;
    private $postsBestseller;
    private $postsSimilar;

    public function __construct()
    {
        $this->postOne = app(PostOne::class);
        $this->postsAll = app(PostsAll::class);
        $this->postsCategory = app(PostsCategory::class);
        $this->postsSearch = app(PostsSearch::class);
        $this->postsNew = app(PostsNew::class);
        $this->postsAction = app(PostsNew::class);
        $this->postsBestseller = app(PostsBestseller::class);
        $this->postsSimilar = app(PostsSimilar::class);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getPostOne($id)
    {
        return $this->postOne->getPostOne($id);
    }

    public function getPostsAll()
    {
        return $this->postsAll->getPostsAll();
    }

    public function getPostsCategory($category)
    {
        return $this->postsCategory->getPostsCategory($category);
    }

    public function getPostsSearch($search)
    {
        return $this->postsSearch->getPostsSearch($search);
    }

    public function getPostsNew()
    {
        return $this->postsNew->getPostsNew();
    }

    public function getPostsAction()
    {
        return $this->postsAction->getPostsAction();
    }

    public function getPostsBestseller()
    {
        return $this->postsBestseller->getPostsBestseller();
    }

    public function getPostsSimilar()
    {
        return $this->postsSimilar->getPostsSimilar();
    }

}
