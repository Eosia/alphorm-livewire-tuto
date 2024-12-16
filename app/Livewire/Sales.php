<?php

namespace App\Livewire;

use Livewire\Component;

class Sales extends Component
{
    public $sales;

    public function mount() {
        sleep(2);
        $this->sales = 200000;
    }

    public function placeholder()
    {
        return <<<'HTML'
            <div>Loading ...</div>
        HTML;

    }


    public function render()
    {
        return view('livewire.sales');
    }
}
