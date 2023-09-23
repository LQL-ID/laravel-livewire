<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 3;

    public function increment()
    {
        return $this->counter++;
    }

    public function decrement()
    {
        return $this->counter--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
