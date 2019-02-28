<?php

namespace App\Events\Cart;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

//use App\Services\Cart\Cart;
//use App\Services\Cart\Models\Order;
use App\Services\Cart\Models\OrderItem;

class onAddItemEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $order;
    public $product;
    public $quantity;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(/*Cart $cart, Order $order, */OrderItem $orderItem)
    {
        $this->order = $orderItem->order_id;
        $this->product = $orderItem->product_id;
        $this->quantity = $orderItem->quantity;
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
