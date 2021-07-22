<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OfertasComponent extends Component
{
    public function render()
    {
        return view('livewire.ofertas-component')->layout('layouts.base');
    }
}
