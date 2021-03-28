<?php


namespace App\Http\Services\Product;


use App\Model\Category;

class ProductsCategory
{

    public function getProductsCategory($category)
    {
        return Category::where('slug', $category)
            ->with('product')
            ->orderBy('id', 'desc')
            ->paginate(6);
    }
}
