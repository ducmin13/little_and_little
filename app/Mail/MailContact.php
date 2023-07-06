<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @param  array  $contact
     * @return void
     */
    public function __construct(array $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('layout.mailcontact')
                    ->subject('Mail Contact')
                    ->with(['contact' => $this->contact]);
    }
}
