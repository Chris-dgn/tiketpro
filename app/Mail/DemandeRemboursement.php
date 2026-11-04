<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemandeRemboursement extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $donnees)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvelle demande de remboursement — TiketPro',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.remboursement',
            with: ['donnees' => $this->donnees],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
