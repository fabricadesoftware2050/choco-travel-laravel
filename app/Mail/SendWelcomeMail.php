<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;

class SendWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $url_verify;

    public function __construct($name,$url_verify)
    {
        $this->name = $name;
        $this->url_verify = $url_verify;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '¡Bienvenido a Chocó Travel!',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.welcome', // nombre correcto de la vista
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
