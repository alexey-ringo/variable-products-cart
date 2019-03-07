<?php

namespace App\Listeners\Cart;

use App\Events\System\onSessionDestroyEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Session;
use App\Services\Cart\Models\Order;
use App\Services\Cart\Models\OrderItem;
use Log;

class SessionDestroyListener
{
    const SESSION_KEY = 'order_id';
    
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
     * @param  onSessionDestroyEvent  $event
     * @return void
     */
    public function handle(onSessionDestroyEvent $event)
    {
        //$orderId = Session::get(self::SESSION_KEY);
        /*
        if(Order::where(['id' => $orderId])->delete()) {
             Log::info('Order was destroyed successfully');
        }
        else {
             Log::info('Error!! Order was destroyed unsuccessfully');
        }
        */
        Log::info('Session inf', [
                                    'SessionId' => $event->sessionId
                                 ]);
    }
}
