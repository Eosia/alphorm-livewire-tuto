<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{

    public string $name;
    public string $email;
    public string $password;

    public function save() {

        User::create($this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]));

//        User::create([
//            'name' => $this->name,
//            'email' => $this->email,
//            'password' => $this->password,
//        ]);

        $this->redirect('/create-user');
    }


    public function render()
    {
        return view('livewire.create-user');
    }
}
