<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateSlider extends Component
{
    public $image;
    public $new_image;
    public $status;
    public $slide;

    use WithFileUploads;
    public function mount($id)
    {
        $this->slide = \App\Models\Slider::find($id);
        $this->image = $this->slide->image;
        $this->status = $this->slide->status;
    }

    public function updateSlide()
    {
        $this->slide->status = $this->status;
        if (empty($this->new_image)){
            $this->slide->image = $this->image;

        }else{
            $image_name = time() . '.' . $this->new_image->extension();
            $this->new_image->storeAs('slide', $image_name);
            unlink('images/slide' . '/' . $this->image);

            $this->slide->image = $image_name;
        }
        $this->slide->save();

        session()->flash('message', 'Slide Updated Successfully !');

        return redirect()->route('admin.slider');
    }

    public function render()
    {

        return view('livewire.admin.update-slider')->layout('layouts.admin');
    }
}
