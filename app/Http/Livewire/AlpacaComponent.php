<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlpacaComponent extends Component
{
    public function render()
    {
        return view('livewire.alpaca-component')->layout('layouts.base');
    }
}
