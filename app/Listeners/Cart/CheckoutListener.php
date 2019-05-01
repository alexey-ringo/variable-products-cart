<?php

namespace App\Listeners\Cart;

use App\Events\Cart\onCheckoutEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlaced;

class CheckoutListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  onCheckoutEvent  $event
     * @return void
     */
    public function handle(onCheckoutEvent $event)
    {
        //
        Mail::to('superats@yandex.ru')->send(new OrderPlaced);
    }
}
