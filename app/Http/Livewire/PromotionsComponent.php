<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use App\Models\HomeSlider;

class PromotionsComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        $products = Product::all();
        $sproducts = Product::where('sale_price', '>', 0)->inRandomOrder()->get()->take(8);
        $sale = Sale::find(1);
        $sliders = HomeSlider::where('status',1)->get();
        return view('livewire.promotions-component', ['products'=>$products,'categories'=>$categories, 'sproducts'=>$sproducts, 'sale'=>$sale,'sliders'=>$sliders])->layout('layouts.base');
    }
}
