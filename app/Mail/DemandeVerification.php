<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemandeVerification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $donnees)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Demande de vérification — TiketPro',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.verification',
            with: ['donnees' => $this->donnees],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
