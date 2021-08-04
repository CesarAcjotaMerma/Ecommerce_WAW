<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use App\Models\HomeSlider;

class OfertasComponent extends Component
{
    public function render()
    {
        // $categories = Category::all();
        // $products = Product::all();
        // $sproducts = Product::where('sale_price', '>', 0)->inRandomOrder()->get()->take(8);
        // $sale = Sale::find(1);
        // $sliders = HomeSlider::where('status',1)->get();
        return view('livewire.ofertas-component')->layout('layouts.base');
    }
}
