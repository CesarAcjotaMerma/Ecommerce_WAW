<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HandMadeComponent extends Component
{
    public function render()
    {
        return view('livewire.hand-made-component')->layout('layouts.base');
    }
}
