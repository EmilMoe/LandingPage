<?php

namespace EmilMoe\LandingPage\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Sender data.
     * 
     * @var Request
     */
    private $request;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Message sent from '. env('APP_NAME'))
            ->from($this->request->input('email'), $this->request->input('name'))
            ->to(env('MAIL_WEBMASTER'))
            ->view('LandingPage::emails.contact-form')
            ->with('text', $this->request->input('message'));
    }
}
