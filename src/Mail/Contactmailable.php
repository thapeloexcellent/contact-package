<?php

namespace Thapelo\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contactmailable extends Mailable
{
    use Queueable, SerializesModels;
    public $message, $name;

    /**
     * Create a new message instance.
     */
    public function __construct($message, $name)
    {
        $this->message = $message;
        $this->name = $name;
    }
    public function build()
    {
        return $this->markdown('contact::contact.email')->with(['message' => $this->message], ['name' => $this->name]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
