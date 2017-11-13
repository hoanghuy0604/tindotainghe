<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\STShop\Slider\SliderTable;

class SliderController extends Controller
{
    public function __construct(SliderTable $sliderTable)
    {
        $this->sliderTable = $sliderTable;
    }

    public function createSliderForm()
    {
        return view('admin.slide-create');
    }

    public function createSlider()
    {
        $rawData = request()->input();

        if(isset($rawData['active'])){
            $rawData['active'] = true;
        }

        $this->sliderTable->insert($rawData);
        return redirect()->route('slider');
    }

    public function listSlider()
    {
        $slider = $this->sliderTable->fetchAll();
        return view('admin.slide', ['slider' => $slider]);
    }

    public function updateSliderForm($id)
    {
        $slider = $this->sliderTable->findById($id);
        return view('admin.slide-edit', ['product' => $slider]);
    }

    public function updateSlider($id)
    {
        $rawData = request()->input();

        if(! isset($rawData['active'])){
            $rawData['active'] = false;
        }

        if(isset($rawData['active'])){
            if($rawData['active'] == 'on'){
                $rawData['active'] = true;
            }
        }
        $this->sliderTable->update($rawData, $id);
        return redirect()->route('slider');
    }

    public function delSlider($id)
    {
        $this->sliderTable->delete($id);
        return redirect()->route('slider');
    }
}