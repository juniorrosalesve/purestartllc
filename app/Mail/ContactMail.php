<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    public function __construct($data)
    {
        $this->data     =   $data;
    }

    public function build()
    {
        return $this->from('noreply@purestartllc.com', 'New website contact')
        ->subject(date('d-m-Y h:i:s'))->markdown('email.contactView', [
            'data' => $this->data
        ]);
    }
}
