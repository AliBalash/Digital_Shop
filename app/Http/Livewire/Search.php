<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class Search extends Component
{
    public $search;
    public $searches;

    public function mount($search)
    {
        $this->search = $search;
        $this->searches = Service::where('name', 'like', "%$search%")->get();
    }

    public function render()
    {

        return view('livewire.search');
    }
}
