<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Jelly Man 2';
    public function render()
    {
        return view('livewire.hello-world');
    }
}