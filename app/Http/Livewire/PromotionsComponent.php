<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;

class PromotionsComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        $products = Product::all();
        $sproducts = Product::where('sale_price', '>', 0)->inRandomOrder()->get()->take(8);
        $sale = Sale::find(1);
        return view('livewire.promotions-component', ['products'=>$products,'categories'=>$categories, 'sproducts'=>$sproducts, 'sale'=>$sale])->layout('layouts.base');
    }
}
