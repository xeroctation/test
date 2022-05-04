<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 3;
    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }

    public function reset1(){
        $this->count = 0;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
