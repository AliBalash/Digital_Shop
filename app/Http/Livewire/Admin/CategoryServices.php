<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CategoryServices extends Component
{
    public $services;
    public function mount($slug)
    {
        $cat = \App\Models\Category::where('slug', $slug)->first();
        $this->services = $cat->services;
    }
    public function render()
    {
        return view('livewire.admin.category-services')->layout('layouts.admin');
    }
}
