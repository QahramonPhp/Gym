<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ClassComponent extends Component
{
    public function render()
    {
        return view('livewire.class-component')->layout('layout.layouts');
    }
}
