<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EcoComponent extends Component
{
    public function render()
    {
        return view('livewire.eco-component')->layout('layouts.base');
    }
}
