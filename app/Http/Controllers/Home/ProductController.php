<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\STShop\Category\CategoryTable;
use App\STShop\Product\ProductTable;

class ProductController extends Controller
{

    public function __construct(ProductTable $productTable, CategoryTable $categoryTable)
    {
        $this->productTable = $productTable;
        $this->categoryTable = $categoryTable;
    }

    public function detail($id)
    {
        $product = $this->productTable->findById($id);
        $categoryId = $product->category_id;
        $productCare = $this->productTable->findByCategoryIdLimit($categoryId);
        return view('home.product-detail', ['product' => $product, 'productCare' => $productCare]);
    }

    public function listProduct($categoryName, $id)
    {
        $products = $this->productTable->listProductForCategory(intval($id));
        $categoryTable = new CategoryTable();
        $keyword = $this->categoryTable->findById($id)->keyword;
        $nameCategory = $categoryTable->findById(intval($id))->name;
        return view('home.list-category', ['products' => $products, 'name' => $nameCategory, 'keyword' => $keyword]);
    }
}