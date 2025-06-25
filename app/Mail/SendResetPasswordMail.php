<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
class SendResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $url_reset_password;
    public string $email;

    public function __construct($subject,$name,$email,$url_reset_password)
    {
        $this->subject = $subject;
        $this->name = $name;
        $this->url_reset_password = $url_reset_password;
        $this->email = $email;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject??'¡Cambiar contraseña!',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.reset-password', // nombre correcto de la vista
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
