<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomePopup;
use Livewire\withFileUploads;
use Carbon\Carbon;

class AdminEditHomePopupComponent extends Component
{
    use withFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $newimage;
    public $popup_id;

    public function mount($popup_id)
    {
        $popup = HomePopup::find($popup_id);
        $this->title = $popup->title;
        $this->subtitle = $popup->subtitle;
        $this->price = $popup->price;
        $this->link = $popup->link;
        $this->image = $popup->image;
        $this->status = $popup->status;
        $this->popup_id = $popup->id;

    }

    
    public function updatePopup()
    {
        $popup = HomePopup::find($this->popup_id);
        $popup->title = $this->title;
        $popup->subtitle = $this->subtitle;
        $popup->price = $this->price;
        $popup->link = $this->link;
        if($this->newimage)
        {
            $imagename = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('popups', $imagename);
            $popup->image = $imagename;
        }
        $popup->status = $this->status;
        $popup->save();
        session()->flash('message', 'El Popup se ha actualizado Satisfactoriamente!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-popup-component')->layout('layouts.base');
    }
}
