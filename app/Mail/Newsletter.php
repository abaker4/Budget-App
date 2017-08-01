<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\ContactNewsletter;
class Newsletter extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_newsletter;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(ContactNewsletter $contact_newsletter)
    {
            $this->contact_newsletter = $contact_newsletter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('emails.newsletter');
    }
}
