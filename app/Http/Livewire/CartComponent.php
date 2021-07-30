<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-count-component','refreshComponent');
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-count-component','refreshComponent');
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('success_mesasge', 'El elemento ha sido eliminado');
    }
    public function destroyAll()
    {
        Cart::destroy();
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('success_mesasge', 'Se han eliminado todos los elementos');
    }

    public function render()
    {
        return view('livewire.cart-component')->layout("layouts.base");;
    }
}
