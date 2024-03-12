<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class ActivationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $activationUrl;

    /**
     * Create a new message instance.
     *
     * @param string $activationUrl
     */
    public function __construct($activationUrl)
    {
        $this->activationUrl = $activationUrl;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.activation', ['url' => $this->activationUrl]);
    }
}
