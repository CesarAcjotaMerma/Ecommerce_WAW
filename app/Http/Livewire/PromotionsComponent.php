<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use App\Models\HomeSlider;
use App\Models\HomeCategory;

class PromotionsComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        $products = Product::all();
        $sproducts = Product::where('sale_price', '>', 0)->inRandomOrder()->get()->take(8);
        $sale = Sale::find(1);
        $sliders = HomeSlider::where('status',1)->get();
        $category = HomeCategory::find(1);
        // $cats = explode(',',$category->sel_categories);
        // $categories = Category::whereIn('id',$cats)->get();
        // $no_of_products = $category->no_of_products;
        return view('livewire.promotions-component', ['products'=>$products,'categories'=>$categories, 'sproducts'=>$sproducts, 'sale'=>$sale,'sliders'=>$sliders])->layout('layouts.base');
        // ['products'=>$products,'categories'=>$categories, 'no_of_products'=>$no_of_products, 'sproducts'=>$sproducts, 'sale'=>$sale,'sliders'=>$sliders]
    }
}
