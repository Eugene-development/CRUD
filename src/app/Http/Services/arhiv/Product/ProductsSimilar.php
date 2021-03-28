<?php


namespace App\Http\Services\Product;


use App\Model\Product;

class ProductsSimilar
{
    public function getProductsSimilar()
    {
        return Product::where('similar', 1)->orderBy('id', 'desc')->get();
    }

}
