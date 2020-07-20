<?php namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Order
     */
    public $data;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Formulaire de contact';

        return $this->markdown('emails.contact')
            ->subject($subject);

        // return $this->markdown('emails.contact')
        //     // ->with('data', json_decode($this->data))
        //     ->subject($subject);

        // return $this->view('emails.contact')
        //     ->with('abc', 'abc');
            // ->with('data', $this->data);
    }
}
