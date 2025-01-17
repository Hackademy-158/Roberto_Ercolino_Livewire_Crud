<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $value = 10;
    public $num_five = 5;

    public function increment()
    {
        $this->value ++;
    }

    public function decrement()
    {
        $this->value--;
    }

    public function incrementByNumber($number)
    {
        $this->value += $number;
    }

    public function decrementByNumber($number)
    {
        $this->value -= $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
