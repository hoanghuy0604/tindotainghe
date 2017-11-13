<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateFormRequest;
use App\STShop\Category\CategoryTable;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Admin
 */
class CategoryController extends Controller
{

    /**
     * CategoryController constructor.
     * @param CategoryTable $categoryTable
     */
    public function __construct(CategoryTable $categoryTable)
    {
        $this->categoryTable = $categoryTable;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function categoryForm()
    {
        return view('admin.category-create');
    }

    /**
     * @param CategoryCreateFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function createCategory(CategoryCreateFormRequest $request)
    {
        $rawData = request()->input();
        if(isset($rawData['description'])){
            $rawData['description'] = str_replace(' ', '-', $rawData['description']);
        }
        $this->categoryTable->insert($rawData);
        return redirect()->route('category');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listCategory()
    {
        $rawData = $this->categoryTable->fetchAll();

        if($rawData){
            return view('admin.category', ['category' => $rawData]);
        }

        return view('admin.category');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateCategoryForm($id)
    {
        $category = $this->categoryTable->findById($id);
        return view('admin.category-edit', ['category' => $category]);
    }

    /**
     * @param CategoryCreateFormRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateCategory(CategoryCreateFormRequest $request, $id)
    {
        $rawData = request()->input();

        if(! isset($rawData['type'])){
            $rawData['type'] = null;
        }

        $this->categoryTable->update($rawData, $id);
        return redirect()->route('category');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $this->categoryTable->delete($id);
        return redirect()->route('category');
    }
}