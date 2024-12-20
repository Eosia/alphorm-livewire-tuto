<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Livewire\Forms\UserForm;

class CreateUser extends Component
{

    public UserForm $form;

    public function save() {

        $this->form->store();

//        User::create($this->validate());

//        User::create($this->validate([
//            'name' => 'required',
//            'email' => 'required|email|unique:users,email',
//            'password' => 'required|min:8',
//        ]));

//        User::create([
//            'name' => $this->name,
//            'email' => $this->email,
//            'password' => $this->password,
//        ]);

        //$this->redirect('/create-user');

        session()->flash('success', 'User successfully created.');


    }


    public function render()
    {
        return view('livewire.create-user', [
            'users' => User::latest()->get(),
        ]);
    }
}
