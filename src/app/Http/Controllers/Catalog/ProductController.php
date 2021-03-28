<?php


namespace App\Http\Controllers\Catalog;


use App\Http\Contracts\Catalog;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    protected $entity;

    function __construct()
    {
        $this->entity = Catalog::class;
    }


    //    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productOne(Request $request)
//    {
//        $container = app();
//        $product = $container->make(Catalog::class)
//            ->getProductOne($request->id);
//        return new Resource($product);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function getAll()
//    {
//        $container = app();
//        $productsAll = $container->make(Catalog::class)
//            ->getProductsAll();
//        return new Resource($productsAll);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsCategory(Request $request)
//    {
//        $container = app();
//        $productsCategory = $container->make(Catalog::class)
//            ->getProductsCategory($request->category);
//        return new Resource($productsCategory);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function ProductsSearch(Request $request)
//    {
//        $container = app();
//        $productsSearch = $container->make(Catalog::class)
//            ->getProductsSearch($request->search);
//        return new Resource($productsSearch);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsNew()
//    {
//        $container = app();
//        $productsNew = $container->make(Catalog::class)
//            ->getProductsNew();
//        return new Resource($productsNew);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsSale()
//    {
//        $container = app();
//        $productsSale = $container->make(Catalog::class)
//            ->getProductsSale();
//        return new Resource($productsSale);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsAction()
//    {
//        $container = app();
//        $productsAction = $container->make(Catalog::class)
//            ->getProductsAction();
//        return new Resource($productsAction);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsBestseller()
//    {
//        $container = app();
//        $productsBestseller = $container->make(Catalog::class)
//            ->getProductsBestseller();
//        return new Resource($productsBestseller);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsSimilar()
//    {
//        $container = app();
//        $productsSimilar = $container->make(Catalog::class)
//            ->getProductsSimilar();
//        return new Resource($productsSimilar);
//    }

}
