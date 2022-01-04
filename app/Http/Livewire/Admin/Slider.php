<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Slider extends Component
{

    public $sliders;
    public $image;
    public $edit = 0;


    public function delete($id)
    {
        $slide = \App\Models\Slider::find($id);
        unlink('images/slide' . '/' . $slide->image);

        $slide->delete();
        session()->flash('message','Slide Deleted Successfully ! ');
    }
    public function render()
    {
        $this->sliders = \App\Models\Slider::orderBy('created_at', 'DESC')->get();
        return view('livewire.admin.slider')->layout('layouts.admin');
    }
}
