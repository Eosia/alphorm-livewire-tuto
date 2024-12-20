<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Rule;

class UserForm extends Form
{
    //
    #[Rule('required|min:3|unique:users,name')]
    public string $name = '';

    #[Rule('required|email|unique:users,email')]
    public string $email = '';

    #[Rule('required', message:'Le champs :attribute est obligatoire')]
    #[Rule('min:4', message:'Le champs :attribute doit contenir min 4 caractères')]
    public string $password = '';

    public function store() {

        $this->validate();
        User::create($this->all());
        $this->reset();

//
//        User::create([
//            'name' => $this->name,
//            'email' => $this->email,
//            'password' => $this->password,
//        ]);
    }

}
