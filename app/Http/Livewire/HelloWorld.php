<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Jelly Man 2';
    public $loud = false;
    public $greeting = ['Hello'];

    public function mount(Request $request, $name)
    {
        $this->name = $request->input('name', $name);
    }

    public function hydrate()
    {
        $this->name = '#stay_hydrated';
    }

    public function resetName($name = "Bahgat Saber")
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
