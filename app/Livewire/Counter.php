<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public string $title = "Mon compteur";

    public int $count = 0;

    public function increment() {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function stop() {
        $this->count = 0;
    }
    public function render()
    {
        return view('livewire.counter')
            ->title($this->title);
    }
}
