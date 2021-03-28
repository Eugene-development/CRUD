<?php


namespace App\Http\Services\Product;


use App\Model\Product;

class ProductsSearch
{
    public function getProductsSearch($search)
    {
        return Product::where('name', 'like', "%" . $search . "%")
            ->orWhere('description', 'like', "%" . $search . "%")
            ->orderBy('id', 'desc')
            ->paginate(100);
    }
}
