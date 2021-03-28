<?php


namespace App\Http\Controllers\Blog;


use App\Http\Contracts\PostContract;
use App\Http\Contracts\Catalog;
use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postOne(Request $request)
    {
        $container = app();

        $post = $container->make(PostContract::class)
            ->getPost($request->id);

        return new Resource($post);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postsAll()
    {
        $container = app();

        $postsAll = $container->make(PostContract::class)
            ->getProductsAll();

        return new Resource($postsAll);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postsCategory(Request $request)
    {
        $container = app();

        $postsCategory = $container->make(PostContract::class)
            ->getPostsCategory($request->category);

        return new Resource($postsCategory);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postsSearch(Request $request)
    {
        $container = app();

        $postsSearch = $container->make(PostContract::class)
            ->getPostsSearch($request->search);

        return new Resource($postsSearch);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postsNew()
    {
        $container = app();

        $postsNew = $container->make(PostContract::class)
            ->getPostsNew();

        return new Resource($postsNew);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postsAction()
    {
        $container = app();

        $postsAction = $container->make(PostContract::class)
            ->getPostsAction();

        return new Resource($postsAction);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postsBestseller()
    {
        $container = app();

        $postsBestseller = $container->make(PostContract::class)
            ->getPostsBestseller();

        return new Resource($postsBestseller);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postsSimilar()
    {
        $container = app();

        $postsSimilar = $container->make(PostContract::class)
            ->getPostsSimilar();

        return new Resource($postsSimilar);
    }

}
