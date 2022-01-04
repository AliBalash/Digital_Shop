<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

class NewSlider extends Component
{
    public $image;
    public $status = 1;

    use WithFileUploads;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'image' => 'required',
            'status' => 'required'
        ]);

    }

    public function newSlider()
    {
        $this->validate([
            'image' => 'required',
            'status' => 'required',
        ]);
        $image_name = time() . '.' . $this->image->extension();
        $this->image->storeAs('slide', $image_name);
        $slide = new \App\Models\Slider();
        $slide->image = $image_name;
        $slide->status = $this->status;
        $slide->save();

        session()->flash('message', 'Slide Created Successfully !');

        return redirect()->route('admin.slider');

    }

    public function render()
    {
        return view('livewire.admin.new-slider')->layout('layouts.admin');
    }
}
