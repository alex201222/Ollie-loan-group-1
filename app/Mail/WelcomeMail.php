<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $request;
    public function __construct(array $request)
    {
        $this->request = $request;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this
        ->from('olliegroupafrica@gmail.com', 'Ollie Group Africa')
        ->subject('Contact')
        ->markdown('emails.welcome');
    }
}
