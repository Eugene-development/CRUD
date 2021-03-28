<?php


namespace App\Http\Services\Product;


use App\Model\Product;

class ProductsNew
{
    public function getProductsNew()
    {
        return Product::where('new', 1)->orderBy('id', 'desc')->get();
    }
}
