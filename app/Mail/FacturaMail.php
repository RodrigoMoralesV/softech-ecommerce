<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FacturaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageData;
    public $pdf;
    public $numFac;

    /**
     * Create a new message instance.
     */
    public function __construct($messageData, $pdf, $numFac)
    {
        $this->messageData = $messageData;
        $this->pdf = $pdf;
        $this->numFac = $numFac;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Factura #' . $this->numFac,
            from: 'softechadso8@gmail.com'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.factura',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            \Illuminate\Mail\Mailables\Attachment::fromData(fn () => $this->pdf->output(), 'factura' . $this->numFac . '.pdf')
                ->withMime('application/pdf'),
        ];
    }
}