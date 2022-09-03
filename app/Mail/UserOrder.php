<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserOrder extends Mailable
{
    use Queueable, SerializesModels;

<<<<<<< HEAD
    Public $user;
=======
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
    /**
     * Create a new message instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct($user)
    {
        $this->user = $user;
=======
    public function __construct()
    {
        //
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
<<<<<<< HEAD
        $address = 'no_reply@newideasnewsolutions.org';
        $name = 'Cakeries';
        $subject = 'New Order Notification';
        return $this->view('email.admin.order_notify')
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
=======
        return $this->view('view.name');
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
    }
}
