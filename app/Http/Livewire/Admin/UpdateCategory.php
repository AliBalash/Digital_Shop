<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use RealRashid\SweetAlert\Facades\Alert;

class UpdateCategory extends Component
{
    use WithFileUploads;

    public $category;
    public $name;
    public $slug;
    public $image;
    public $new_image;

    public function mount($slug)
    {

        $this->category = \App\Models\Category::where('slug', $slug)->first();
        $this->name = $this->category->name;
        $this->slug = $this->category->slug;
        $this->image = $this->category->image;
        $this->new_image = null;

    }

    public function updated($fields)
    {
        $this->slug = Str::slug($this->name);
        $this->validateOnly($fields, [
            'name' => 'required|',
            'image' => 'required|',
        ]);
        if ($this->new_image) {
            $this->validateOnly($fields, [
                'name' => 'required|',
                'new_image' => 'required|',
            ]);
        }
    }

// Store Edited Category
    public function UpdateCategory()
    {
        $this->validate([
            'name' => 'required|',
        ]);
        $this->category->update([
            'name' => $this->name,
            'slug' => $this->slug,
        ]);

//        Update Whit New Image
        if ($this->new_image) {
            $image = $this->new_image;
            $this->validate([
                'name' => 'required|',
                'image' => 'required|',
            ]);

            $image_name = Carbon::now()->timestamp . '.' . $image->extension();
            $this->new_image->storeAs('categories', $image_name);

            $this->category->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'image' => $image_name,
            ]);

            unlink('images/categories' . '/' . $this->image);
        }


        $this->new_image = '';
//        session()->flash('message', 'Category Updated Successful !');
//        Alert::success('Update Category Successfuly', 'You\'ve Successfully Registered');
        Alert::error('Error Title', 'Error Message');
        return redirect()->route('admin.category');
    }


    public function render()
    {
        return view('livewire.admin.update-category')->layout('layouts.admin');
    }
}
