<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoanApproval extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $request)
    {
        $this->request=$request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public $request;
    public function build()
    {
        return $this
        ->from(address:'dodsamwan20122@gmail.com', name:'Ollie Group')
        ->subject(subject:'New Loan Approval')
        ->view('nav');
    }
}
