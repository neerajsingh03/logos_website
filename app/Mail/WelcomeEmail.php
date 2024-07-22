<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $allData;
    public $email;

    /**
     * Create a new message instance.
     */
    public function __construct($allData)
    {
        $this->allData = $allData;
        // saveAppLog(json_encode($this->user, true));
        // saveAppLog('test queue job');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome to Our Site!')
            ->view('user.email.welcome-email');
    }
}
