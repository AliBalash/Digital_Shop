<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceDetail extends Component
{
    public $service;
    public $related_service ;
    public function mount($slug)
    {
        $this->service = Service::where('slug', $slug)->first();
        $this->related_service = Service::inRandomOrder()->first();
    }
    public function render()
    {
        return view('livewire.service-detail');
    }
}
