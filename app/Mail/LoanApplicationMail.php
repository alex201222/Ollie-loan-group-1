<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoanApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $request;
    public $loanid;
    public function __construct(Array $request,$loanid)
    {
        $this->request=$request;
        $this->loanid=$loanid;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('olliegroupafrica@gmail.com', 'Ollie Group Africa')
                    ->subject('Loan Application Approval')
                    ->markdown('mail.loan-application-mail');
    }
}
