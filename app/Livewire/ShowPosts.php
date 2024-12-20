<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{

    use WithPagination;

    //public $posts = [];
    public $title = "Liste des posts";

    #[Url]
    public string $search = "";

//    public function mount() {
//        $this->posts = Post::all();
//    }

public function searchPosts() {
    $this->resetPage();
}


    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::latest()->with('user')
                ->when($this->search, function ($query) {
                    $query->search($this->search);
                })
        ->paginate(8),
            'search' => $this->search,
        ])
            ->title($this->title)
            ;
    }
}
