<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Admin\Slider;
use App\Models\Category;
use App\Models\Service;
use App\Providers\RouteServiceProvider;
use Livewire\Component;

class Home extends Component
{
    public $categories;
    public $best_categories;
    public $services;
    public $last_services;
    public $sliders;

    public $search;


    public function search()
    {
        if ($this->search){
            return redirect()->route('search', $this->search);
        }else{
            return RouteServiceProvider::HOME;
        }
    }
    public function mount()
    {
        $this->sliders = \App\Models\Slider::orderBy('created_at', 'DESC')->get();
        $this->categories = Category::all();
        $this->best_categories = Category::orderBy('created_at','DESC')->take(8)->get();
        $this->last_services = Service::orderBy('created_at','DESC')->take(4)->get();
        $this->services = Service::all();

    }
    public function render()
    {
        return view('livewire.home');
    }
}
