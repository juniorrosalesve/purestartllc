<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class Home extends Component
{

    public $name;
    public $email;
    public $phone;
    public $business;

    public function submit() {
        $data   =   [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'business' => $this->business
        ];
        Mail::to('purestartllc@gmail.com')->queue(new ContactMail($data));
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->business = '';
        session()->flash('success', 'Your message has been sent successfully, you will have an answer very soon!');
    }

    public function render()
    {
        return view('livewire.site.home')->layout('layouts.web');
    }
}
