<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\STShop\Product\ProductTable;
use App\STShop\Slider\SliderTable;
use View;
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
        $productTop = $this->productTable->findByTypeCategory();
        $productNew = $this->productTable->findByProductNew();
        $productCC  = $this->productTable->findByProductCC();
        $productGR  = $this->productTable->findByProductGR();
        $slider     = $this->sliderTable->fetchAll();
        $speaker = $this->productTable->findSpeaker();
        return view('home.index', [
            'productHot' => $productHot,
            'productCC'  => $productCC,
            'productNew' => $productNew,
            'productGR'  => $productGR,
                'slider' => $slider,
                'productTop' => $productTop,
                'speaker' => $speaker
            ]
        );
    }
    public function guide()
    {
        return view('home.guide',[]);
    }
    public function maintain()
    {
        return view('home.maintain',[]);
    }
    public function sitemap()
    {
        return view('home.sitemap');
    }

}