<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FeatureComponent extends Component
{
    public function render()
    {
        return view('livewire.feature-component')->layout('layout.layouts');
    }
}
