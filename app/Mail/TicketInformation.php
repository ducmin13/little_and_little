<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketInformation extends Mailable
{
    use Queueable, SerializesModels;

    public $tickets;

    /**
     * Create a new message instance.
     *
     * @param  array  $tickets
     * @return void
     */
    public function __construct(array $tickets)
    {
        $this->tickets = $tickets;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('layout.ticket')
                    ->subject('Ticket Information')
                    ->with(['tickets' => $this->tickets]);
    }
}
