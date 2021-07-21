<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SoftComponent extends Component
{
    public function render()
    {
        return view('livewire.soft-component')->layout('layouts.base');
    }
}
