<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;

class ServicesByCategory extends Component
{
    public $services_category;
    public $category;

    public function mount($slug)
    {
        $this->category = Category::where('slug', $slug)->first();
        $this->services_category = $this->category->services;
    }
    public function render()
    {

        return view('livewire.services-by-category');
    }
}
