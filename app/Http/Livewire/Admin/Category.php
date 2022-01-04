<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class Category extends Component
{
    public $categories;
    public $services;
    public $render;

    //    Delete Category
    public function delete($id)
    {
        $cat = \App\Models\Category::find($id);
        $cat->delete();

        session()->flash('message', 'Category Deleted Successful !');
    }

    public function render()
    {
        $this->categories = \App\Models\Category::orderBy('created_at','DESC')->get();

        return view('livewire.admin.category')->layout('layouts.admin');

    }
}
