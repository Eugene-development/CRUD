<?php


namespace App\Http\Services\Product;


use App\Http\Contracts\Catalog;

class RepositoryProduct
{

    private $productOne;
    private $productsAll;
    private $productsCategory;
    private $productsSearch;
    private $productsNew;
    private $productsSale;
    private $productsAction;
    private $productsBestseller;
    private $productsSimilar;

    public function __construct()
    {
        $this->productOne = app(ProductOne::class);
        $this->productsAll = app(ProductsAll::class);
        $this->productsCategory = app(ProductsCategory::class);
        $this->productsSearch = app(ProductsSearch::class);
        $this->productsNew = app(ProductsNew::class);
        $this->productsSale = app(ProductsSale::class);
        $this->productsAction = app(ProductsAction::class);
        $this->productsBestseller = app(ProductsBestseller::class);
        $this->productsSimilar = app(ProductsSimilar::class);
    }

    public function getProductOne($id)
    {
        return $this->productOne->getProductOne($id);
    }

    public function getProductsAll()
    {
        return $this->productsAll->getProductsAll();
    }

    public function getProductsCategory($category)
    {
        return $this->productsCategory->getProductsCategory($category);
    }

    public function getProductsSearch($search)
    {
        return $this->productsSearch->getProductsSearch($search);
    }

    public function getProductsNew()
    {
        return $this->productsNew->getProductsNew();
    }

    public function getProductsSale()
    {
        return $this->productsSale->getProductsSale();
    }

    public function getProductsAction()
    {
        return $this->productsAction->getProductsAction();
    }

    public function getProductsBestseller()
    {
        return $this->productsBestseller->getProductsBestseller();
    }

    public function getProductsSimilar()
    {
        return $this->productsSimilar->getProductsSimilar();
    }

}
