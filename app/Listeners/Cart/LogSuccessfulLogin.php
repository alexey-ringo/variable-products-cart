<?php

namespace App\Listeners\Cart;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Services\Cart\Cart;
use App\Services\Cart\CartService;
use App\Services\Cart\Models\Order;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
     
    private $req;
    
    public function __construct(Request $request, Cart $cart)
    {
        $this->req = $request;
        $this->cart = $cart;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        if($event->guard !== 'web') {
            return false;
        }
        
        $savedActOrderFromUser = $this->cart->getActOrderFromUser($event->user->id);
        $sessionOrder = $this->req->session()->get('order_id', '0');
        
        //Если для залогиненного пользователя уже есть в базе ранее сохрененный ордер (под именем этого пользователя)
        if($savedActOrderFromUser) {
            //Если при логгировании данного пользователя, у этого пользователя уже существует новый ордер в сессии
            if($this->req->session()->has('order_id')) {
                //И номера этих ордеров отличаются
                if($savedActOrderFromUser !== $sessionOrder) {
                    //Актуальный ордер с именем залогинившегося пользователя (из актуальных данных из сессии) - маркируем как основной ордер для этого пользователя
                    //Ордер с этим пользователем, который был сохранен в базе ранее - помечаем как "старый"
                    $this->cart->saveNewOrderForUser($event->user->id, $sessionOrder, $savedActOrderFromUser);
                }
            }
            //Если при логине данного пользователя у него в сессии еще нет никакого ордера
            else {
                //вставляем в сессию данного пользователя ордер, сохраненный ИМ в базе ранее
                $this->req->session()->put('order_id', $savedActOrderFromUser);
            }
        }
        //Если для залогиненного пользователя в базе еще не было ни одного сохрененого ордера
        else {
            //Но при этом при логине данного пользователя у него уже есть ордер в сессии
            if($this->req->session()->has('order_id')) {
                //Сохраняем пользователя к актуальному ордеру
                $this->cart->saveUserForOrder($event->user->id, $sessionOrder);
            }
        }
    }
}
