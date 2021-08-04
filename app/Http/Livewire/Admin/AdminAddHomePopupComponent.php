<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomePopup;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddHomePopupComponent extends Component
{
    use withFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;

    public function mount()
    {
        $this->status=0;
    }

    public function addPopup()
    {
        $slider = new HomePopup();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('popups', $imagename);
        $slider->image = $imagename;
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message','El Popup se ha Creado Satisfactoriamente');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-home-popup-component')->layout('layouts.base');
    }
}
