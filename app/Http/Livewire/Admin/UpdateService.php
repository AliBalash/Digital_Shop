<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateService extends Component
{
    public $name;
    public $slug;
    public $tagline;
    public $image;
    public $new_image;
    public $price;
    public $description;
    public $advantage;
    public $defective;
    public $status;
    public $category_id;
    public $cats;

    public $service;

    use WithFileUploads;

    public function mount($slug)
    {
        $this->cats = \App\Models\Category::all();
        $this->service = \App\Models\Service::where('slug', $slug)->first();
        $this->name = $this->service->name;
        $this->slug = $this->service->slug;
        $this->tagline = $this->service->tagline;
        $this->image = $this->service->image;
        $this->new_image = $this->service->new_image;
        $this->price = $this->service->price;
        $this->description = $this->service->description;
        $this->advantage = $this->service->advantage;
        $this->defective = $this->service->defective;
        $this->status = $this->service->status;
        $this->category_id = $this->service->category_id;
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
        if ($this->new_image) {
            $this->validateOnly($fields, [
                'new_image' => 'required|',
            ]);
        }
    }

// Store Edited Category
    public function UpdateService()
    {
//        Update Whit New Image
        if ($this->new_image) {

            $this->validate([
                'name' => 'required|',
                'slug' => 'required|',
                'tagline' => 'required|',
                'new_image' => 'required|',
                'price' => 'required|',
                'description' => 'required|',
                'advantage' => 'required|',
                'defective' => 'required|',
                'status' => 'required|',
                'category_id' => 'required|',
            ]);

            $image_name = Carbon::now()->timestamp . '.' . $this->new_image->extension();
            $this->new_image->storeAs('services', $image_name);

            $this->service->update([
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

            unlink('images/services' . '/' . $this->image);
        } else {

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
            $this->service->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'tagline' => $this->tagline,
                'image' => $this->image,
                'price' => $this->price,
                'description' => $this->description,
                'advantage' => $this->advantage,
                'defective' => $this->defective,
                'status' => $this->status,
                'category_id' => $this->category_id,
            ]);
        }

        session()->flash('message', 'Category Updated Successful !');
        return redirect()->route('admin.serv');
    }


    public function render()
    {
        return view('livewire.admin.update-service')->layout('layouts.admin');
    }
}
