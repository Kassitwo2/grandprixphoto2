<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class emailLargeurEtLangeurRejetee extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */


    public $image;
    public $dpi;
    public $volume;
    public $WidthAndHeight;

    public function __construct($image, $dpi, $volume, $WidthAndHeight)
    {
        //
        $this->image = $image;
        $this->dpi = $dpi;
        $this->volume = $volume;
        $this->WidthAndHeight = $WidthAndHeight;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nous vous informons que votre photo soumise pour le concours ne respecte pas les caractéristiques techniques requises. نود إبلاغكم بأن الصورة التي قدمتموها للمسابقة لا تفي بالمواصفات الفنية المطلوبة.',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.participationRejeteeByLangeureEtLargeur',
        );
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
