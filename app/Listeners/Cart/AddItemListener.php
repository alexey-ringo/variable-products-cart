<?php

namespace App\Listeners\Cart;

use App\Events\Cart\onAddItemEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Log;

class AddItemListener
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
     * @param  onAddItemEvent  $event
     * @return void
     */
    public function handle(onAddItemEvent $event)
    {
        Log::info('Product added in Cart', [
                                            'Order#' => $event->order,
                                            'Product' => $event->product,
                                            'Quantity' => $event->quantity
                                            ]);
    }
}
