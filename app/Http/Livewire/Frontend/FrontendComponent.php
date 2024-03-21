<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class FrontendComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.index')->layout('layouts.frontend');
    }
}
