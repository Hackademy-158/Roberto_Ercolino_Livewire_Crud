<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $number1 = 0;
    public $number2 = 0;

    public $result = 0;

    public function sum()
    {
        $this->result = $this->number1 + $this->number2;
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
