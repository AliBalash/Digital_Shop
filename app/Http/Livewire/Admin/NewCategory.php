<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewCategory extends Component
{
    public $name;
    public $slug;
    public $image;

    use WithFileUploads;
    public function updated($fields)
    {
        $this->slug = Str::slug($this->name);
        $this->validateOnly($fields, [
            'name' => 'required|unique:categories',
            'slug' => 'required',
            'image' => 'required',
        ]);
    }

    public function newCategory()
    {
        $this->validate([
            'name' => 'required|unique:categories',
            'slug' => 'required',
            'image' => 'required',
        ]);
        $image_name = Carbon::now()->timestamp . '.' . $this->image->extension();

        $cat = new \App\Models\Category();
        $cat->name = $this->name;
        $cat->slug = $this->slug;
        $cat->image = $image_name;
        $cat->save();
        $this->image->storeAs('categories', $image_name);

        session()->flash('message', 'Category Created Successful !');

        return redirect()->route('admin.category');


    }
    public function render()
    {
        return view('livewire.admin.new-category')->layout('layouts.admin');
    }
}
