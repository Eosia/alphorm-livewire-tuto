<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class UserList extends Component
{

    #[Reactive]
    public $users;

    public function mount($users) {

        $this->users = $users;
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        session()->flash('success', 'User deleted');
        $this->redirect('create-user');
    }


    public function render()
    {
        return view('livewire.user-list');
    }
}
