<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewService extends Component
{
    public $name;
    public $slug;
    public $tagline;
    public $image;
    public $price;
    public $description;
    public $advantage;
    public $defective;
    public $status = 1;
    public $category_id;
    public $cats;

    public $service;

    use WithFileUploads;

    public function mount()
    {
        $this->cats = \App\Models\Category::all();
    }


    public function updated($fields)
    {

        $this->slug = Str::slug($this->name);
        $this->validateOnly($fields, [
            'name' => 'required|',
            'slug' => 'required|',
            'tagline' => 'required|',
            'image' => 'required|',
            'price' => 'required|',
            'description' => 'required|',
            'advantage' => 'required|',
            'defective' => 'required|',
            'status' => 'required|',
            'category_id' => 'required|',
        ]);

    }

    public function newService()
    {

        $this->validate([
            'name' => 'required|',
            'slug' => 'required|',
            'tagline' => 'required|',
            'image' => 'required|',
            'price' => 'required|',
            'description' => 'required|',
            'advantage' => 'required|',
            'defective' => 'required|',
            'status' => 'required|',
            'category_id' => 'required|',
        ]);
        $image_name = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('services', $image_name);


        $service = \App\Models\Service::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'tagline' => $this->tagline,
            'image' => $image_name,
            'price' => $this->price,
            'description' => $this->description,
            'advantage' => $this->advantage,
            'defective' => $this->defective,
            'status' => $this->status,
            'category_id' => $this->category_id,
        ]);

        session()->flash('message', 'Category Updated Successful !');
        return redirect()->route('admin.serv');

    }


    public function render()
    {
        return view('livewire.admin.new-service')->layout('layouts.admin');
    }
}
