<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserOrderApproved extends Mailable
{
    use Queueable, SerializesModels;

    Public $orderapproval;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderapproval)
    {
        $this->orderapproval = $orderapproval;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'no_reply@newideasnewsolutions.org';
        $name = 'Cakeries';
        $subject = 'Order Confirmation';
        return $this->view('email.user.order_approve_notify')
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
