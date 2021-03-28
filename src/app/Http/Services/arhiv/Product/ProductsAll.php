<?php


namespace App\Http\Services\Product;


use App\Model\Product;

class ProductsAll
{
    public function getProductsAll()
    {
        return Product::all();
    }
}
