<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Service extends Component
{
    public $services;

    public function delete($id)
    {
        $serv = \App\Models\Service::find($id);
        $serv->delete();

        session()->flash('message','Deleted Services Successfully !');
    }
    public function render()
    {
        $this->services = \App\Models\Service::orderBy('created_at','DESC')->get();
        return view('livewire.admin.service')->layout('layouts.admin');
    }
}
