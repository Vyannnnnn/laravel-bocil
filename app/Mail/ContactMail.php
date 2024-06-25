<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Address;
use Illuminate\Mail\Mailables\Address as MailablesAddress;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    // public function build()
    // {
    //     return $this->from($this->details['email'], $this->details['name'])
    //         ->subject('Form Message')
    //         ->view('emails.contact');
    // }

    public function envelope(): Envelope
    {
        return new Envelope(

            subject: 'Contact Mail',
            from: new MailablesAddress('devindadheaindira@gmail.com', 'Devinda Company')
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact'
        );
    }
}
