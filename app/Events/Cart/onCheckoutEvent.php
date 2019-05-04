<?php

namespace App\Events\Cart;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Services\Purchase;
//use App\Order;

class onCheckoutEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $purchase;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Purchase $purchase/*, Order $order*/)
    {
        $this->purchase = $purchase;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
