<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    private $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $message = $this->data['message'];
        $subject = 'Contact Message';
        $application_user = \Config::get('anuj.application_user.name');
        $application_user_email = \Config::get('anuj.application_user.email');
        $email = $this->data['email'];
        return $this->from([$application_user_email, $application_user])
            ->to($email)
            ->subject($subject)->markdown('emails.contact')->with('message',$message);
    }
}
