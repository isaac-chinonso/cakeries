<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Register extends Mailable
{
    use Queueable, SerializesModels;
    public $Register;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Register)
    {
        $this->register = $Register;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'no_reply@cakeries.co.uk';
        $name = 'Cakeries';
        $subject = 'New User Notification';
        return $this->view('email.register')
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
