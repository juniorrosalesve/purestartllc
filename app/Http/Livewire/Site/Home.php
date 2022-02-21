<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class Home extends Component
{

    public $name;
    public $email;
    public $phone;
    public $business;

    public function contact() {
        dd('testing');
    }

    public function render()
    {
        return view('livewire.site.home')->layout('layouts.web');
    }
}
