<?php

namespace App\Http\Middleware;

use App\STShop\Category\CategoryTable;
use App\STShop\Product\ProductTable;
use Closure;

class Menu
{
    public function __construct(CategoryTable $categoryTable, ProductTable $productTable)
    {
        $this->categoryTable = $categoryTable;
        $this->productTable  = $productTable;
    }

    public function handle($request, Closure $next)
    {
        $category = $this->categoryTable->fetchAll();
        $products = $this->productTable->findByType();

        if($category){
            \View::share('categorymn', $category);
        }

        if($products){
            \View::share('productsmn', $products);
        }

        return $next($request);
    }
}