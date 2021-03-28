<?php


namespace App\Http\Services\Product;


use App\Model\Product;

class ProductsAction
{
    public function getProductsAction()
    {
        return Product::where('action', 1)->orderBy('id', 'desc')->get();
    }
}
