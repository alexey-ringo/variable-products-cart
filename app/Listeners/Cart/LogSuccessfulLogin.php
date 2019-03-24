<?php

namespace App\Listeners\Cart;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Services\Cart\Models\Order;

use Log;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
     
    private $req;
    
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        if(!$this->req->session()->has('order_id')) {
            return false;
        }
        
        $order_id = $this->req->session()->get('order_id', '0');
        $order = Order::where('id', $order_id)->first();
        //найти последнюю запись о заказе от этого пользователя
        //удалить все остальные записи о заказах этого пользователя
        if(!$order->user_id) {
            $order->user_id = $this->req->user()->id;
            $order->save();   
        }
        
        //Log::info('Login', ['request' => $this->req->session()->get('order_id', 'default')]);
    }
}
