<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomePopup;

class AdminHomePopupComponent extends Component
{
    public function deletePopup($popup_id)
    {
        $slider = HomePopup::find($popup_id);
        $slider->delete();
        session()->flash('message', 'El Popup se ha eliminado Correctamente');
    }

    public function render()
    {
        $popus = HomePopup::all();
        return view('livewire.admin.admin-home-popup-component',['popups'=>$popus])->layout('layouts.base');
    }
}
