<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{

    use WithPagination;

    //public $posts = [];
    public $title = "Liste des posts";

//    public function mount() {
//        $this->posts = Post::all();
//    }


    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::latest()->with('user')
        ->paginate(6),
        ])
            ->title($this->title)
            ;
    }
}
