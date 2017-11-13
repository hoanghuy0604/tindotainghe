<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateForm;
use App\STShop\Category\CategoryTable;
use App\STShop\Product\ProductTable;

/**
 * Class ProductController
 * @package App\Http\Controllers\Admin
 */
class ProductController extends Controller
{
    /**
     * ProductController constructor.
     * @param CategoryTable $categoryTable
     * @param ProductTable $productTable
     */
    public function __construct(CategoryTable $categoryTable, ProductTable $productTable)
    {
        $this->categoryTable = $categoryTable;
        $this->productTable  = $productTable;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createProductForm()
    {
        $category = $this->categoryTable->fetchAll();
        return view('admin.product-create', ['category' => $category]);
    }

    /**
     * @param ProductCreateForm $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function createProduct(ProductCreateForm $request)
    {
        $rawData = $request->input();
        $rawData['link'] = str_replace(' ', '-', $rawData['link']);
        $this->productTable->insert($rawData);
        return redirect()->route('product');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function productList()
    {
        $products = $this->productTable->fetchAll();
        $category = $this->categoryTable->fetchAll();
        $categoryId = request()->input('category_id');

        if($categoryId){
            if($categoryId == 'all'){
                return view('admin.product', ['category' => $category, 'products' => $products]);
            }
            $products = $this->productTable->findByCategoryId($categoryId);
            return view('admin.product', ['category' => $category, 'products' => $products]);
        }

        return view('admin.product', ['category' => $category, 'products' => $products]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function productSearch()
    {
        $categoryId = request()->input('category_id');
        $products = $this->productTable->findByCategoryId($categoryId);
        return view('admin.product', ['products' => $products]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateProductForm($id)
    {
        $category = $this->categoryTable->fetchAll();
        $product = $this->productTable->findById($id);
        return view('admin.product-edit', ['category' => $category, 'product' => $product]);
    }

    /**
     * @param ProductCreateForm $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProduct(ProductCreateForm $request, $id)
    {
        $rawData = request()->input();
        $rawData['link'] = str_replace(' ', '-', $rawData['link']);
        if(! isset($rawData['type'])){
            $rawData['type'] = null;
        }

        if(! isset($rawData['new'])){
            $rawData['new'] = null;
        }

        if(! isset($rawData['sale']) || $rawData['sale'] == 0){
            $rawData['sale'] = null;
        }

        if(! isset($rawData['type_product'])){
            $rawData['type_product'] = null;
        }

        if(! isset($rawData['type_category'])){
            $rawData['type_category'] = null;
        }

        $this->productTable->update($rawData, $id);
        return redirect()->route('product');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delProduct($id)
    {
        $this->productTable->delete($id);
        return redirect()->route('product');
    }
}