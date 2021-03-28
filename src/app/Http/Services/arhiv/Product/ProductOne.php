<?php


namespace App\Http\Services\Product;

use App\Model\Product;

class ProductOne
{
    public function getProductOne($id)
    {
//        return Product::where('id', $id)->with('tag')->get();
        return Product::where('id', $id)->with('tag')->first();
    }
}
