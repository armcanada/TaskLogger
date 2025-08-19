<?php

namespace Armcanada\TaskLogger\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;

class TaskFailedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public string $taskName, public string $exceptionMessage)
    {

    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@armcanada.ca'),
            subject: 'Une tâche a échoué',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'tasklogger::emails.task-failed',
        );
    }
}