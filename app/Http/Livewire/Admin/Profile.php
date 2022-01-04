<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use RealRashid\SweetAlert\Facades\Alert;

class Profile extends Component
{

    public $user;
    public $status = 0;

    public $name;
    public $new_image=null;
    public $image=null;
    public $bio;
    public $email;

    use WithFileUploads;
    public function mount()
    {
        $this->empty();

        $this->user = Auth::user();

    }

    public function statusOn()
    {
        $this->empty();

        $this->status = 1;

        $this->name = $this->user->name;
        $this->image = $this->user->image;
        $this->bio = $this->user->bio;
        $this->email = $this->user->email;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required',
            'image' => 'required',
            'bio' => 'required',
        ]);

    }

    public function updateProfile($id)
    {
        if ($id = Auth::user()->id){

            $this->validate([
                'name' => 'required',
                'email' => 'required',
                'image' => 'required',
                'bio' => 'required',
            ]);
            $this->user->name = $this->name;
            $this->user->email = $this->email;
            $this->user->bio = $this->bio;
            if ($this->new_image){
                $image_name = time() . '.' . $this->new_image->extension();
                $this->new_image->storeAs('users', $image_name);
                if ($this->user->image){
                    unlink('images/users' . '/' . $this->image);
                }
                $this->user->image = $image_name;

            }
            $this->user->save();
            $this->empty();
            $this->alert();
            session()->flash('message','Updated Profile Successfully ');

        }else{
            session()->flush();
            return redirect()->route('login');
        }
//        Alert::info('Info Title', 'Info Message');

    }
    public function render()
    {

        return view('livewire.admin.profile')->layout('layouts.admin');
    }

    public function empty()
    {
        $this->status = 0;

        $this->name = '';
        $this->image = '';
        $this->bio = '';
        $this->email = '';
    }

}
