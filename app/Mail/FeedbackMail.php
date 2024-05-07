<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public function __construct( $data)
    {
        $this->data = $data;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Feedback',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.feedback',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
