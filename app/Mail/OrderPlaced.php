<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Events\Cart\onCheckoutEvent;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;
    
    private $sendEmailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(onCheckoutEvent $event)
    {
        $this->sendEmailData = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.orders.placed', ['sendEmailData' => $this->sendEmailData]);
    }
}
