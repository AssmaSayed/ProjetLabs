<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\VarDumper\Cloner\Data;

class MailSend extends Mailable
{
    
    use Queueable, SerializesModels;
    public $letter;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->letter = $data;
        
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("assma@mailTrap.com")->view('template.mail.templateNesletter')->subject(" Merci pour votre inscription à notre Newsletter")->with(["email" => $this->letter->email]);    }
}
