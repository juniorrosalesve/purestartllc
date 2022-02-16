<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.site.about')->layout('layouts.web');
    }
}
