<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class MenuOptionsComponent extends Component
{
    public function render()
    {
        $categories = Category::all()->take(5);
        return view('livewire.menu-options-component',['categories'=>$categories])->layout('layouts.base');
    }
}
