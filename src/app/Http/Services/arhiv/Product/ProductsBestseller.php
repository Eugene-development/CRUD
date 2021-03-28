<?php


namespace App\Http\Services\Product;


use App\Model\Product;

class ProductsBestseller
{
    public function getProductsBestseller()
    {
        return Product::where('bestseller', 1)->orderBy('id', 'desc')->get();
    }
}
