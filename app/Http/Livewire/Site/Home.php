<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class Home extends Component
{

    public $nombre;
    public $email;
    public $telefono;
    public $empresa;

    public function submit() {
        //dd($this->email);
        $data    =   $this->validate([
            'nombre' => 'required|max:100',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
            'empresa' => 'required|max:100'
        ]);
        Mail::to('info@purestartllc.com')->queue(new ContactMail($data));
        //Mail::to('juniorrosales1908@gmail.com')->queue(new ContactMail($data));
        $this->nombre = '';
        $this->email = '';
        $this->telefono = '';
        $this->empresa = '';
        session()->flash('success', 'Your message has been sent successfully, you will have an answer very soon!');
    }

    public function render()
    {
        return view('livewire.site.home')->layout('layouts.web');
    }
}
