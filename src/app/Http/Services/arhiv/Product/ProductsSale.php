<?php


namespace App\Http\Services\Product;


use App\Model\Product;

class ProductsSale
{
    public function getProductsSale()
    {
        return Product::where('sale', 1)->orderBy('id', 'desc')->get();
    }
}
