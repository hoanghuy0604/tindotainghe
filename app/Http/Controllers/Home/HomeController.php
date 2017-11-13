<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\STShop\Product\ProductTable;
use App\STShop\Slider\SliderTable;

class HomeController extends Controller
{
    public function __construct(ProductTable $productTable, SliderTable $sliderTable)
    {
        $this->productTable = $productTable;
        $this->sliderTable  = $sliderTable;
    }

    public function home()
    {
        $productHot = $this->productTable->findByType();
        $productNew = $this->productTable->findByProductNew();
        $productCC  = $this->productTable->findByProductCC();
        $productGR  = $this->productTable->findByProductGR();
        $slider     = $this->sliderTable->fetchAll();

        return view('home.index', [
            'productHot' => $productHot,
            'productCC'  => $productCC,
            'productNew' => $productNew,
            'productGR'  => $productGR,
             'slider' => $slider
            ]
        );
    }

    public function sitemap()
    {
        return view('home.sitemap');
    }

}