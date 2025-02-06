<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $email;
    public $phone;
    public $Mailsubject;
    public $message;

    public function __construct($name, $email, $phone, $Mailsubject, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->Mailsubject = $Mailsubject;
        $this->message = $message;
    }
    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mail - From: ' . $this->name,
        );
    }

    public function build()
    {
        return $this
            ->from($this->email, $this->name) // Set the "From" address
            ->subject('Conact Form Submission')
            ->markdown('email.contact'); // Use the Markdown template
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
