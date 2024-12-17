<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateUser extends Component
{

    #[Rule('required|min:3')]
    public string $name;
    #[Rule('required|min:3|email')]
    public string $email;
    #[Rule('required|min:8')]
    public string $password;

    public function save() {

        User::create($this->validate());

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

        $this->redirect('/create-user');
    }


    public function render()
    {
        return view('livewire.create-user');
    }
}
