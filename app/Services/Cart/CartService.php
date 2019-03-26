<?php

namespace App\Services\Cart;

use Illuminate\Http\Request;
use App\Services\Cart\Cart;
use App\Services\Cart\Models\Order;
use App\Services\Cart\Models\OrderItem;
use App\Jobs\ClearCart;

use Event;
use App\Events\Cart\onAddItemEvent;

use Log;

class CartService implements Cart {
    const SESSION_KEY = 'order_id';

    private $_order;
    private $_oldOrder;
    private $_postponedOrder;
    private $req;

    public function add(Request $request, int $productId, int $quantity, Array $AddAttributes = null)
    {
        $this->req = $request;
        /*
        $link = OrderItem::where(['product_id' => $productId, 'order_id' => $this->getOrder()->id])->first();
            
        if (!$link) {
            $link = new OrderProduct();
            $link = new OrderItem();
        }
        */
        
        $link = OrderItem::firstOrNew(['product_id' => $productId, 'order_id' => $this->getOrder()->id]);
        
        /*
        $link->product_id = $productId;
        $link->order_id = $this->getOrder()->id;
        */
        
        $link->order_price = $link->getProductPrice();
        $link->quantity = $link->quantity + $quantity;
        $link->add_attributes = $AddAttributes;
        
        if($link->save()) {
            Event::fire(new onAddItemEvent($link));
            return $link;
        }
        return false;
    }
   
   
    private function getOrder()
    {
        if ($this->_order == null) {
            $this->_order = Order::where(['id' => $this->getOrderId()])->firstOrFail();
        }
        return $this->_order;
    }
   
    
    private function createOrder()
    {
        $order = new Order;
        if ($order->save()) {
            $this->_order = $order;
            //ClearCart::dispatch($order)->delay(now()->addMinutes(2));
            //ClearCart::dispatch('send message about queue start');
            return true;
        }
        return false;
    }

    private function getOrderId()
    {
        if ($this->req->user()) {
            //$orderForUser = Order::where('user_id', $this->req->user()->id)->firstOrFail();
            //return $orderForUser->id;
            return $this->getActOrderFromUser($this->req->user()->id);
        }
        
        if (!$this->req->session()->has(self::SESSION_KEY)) {
            if ($this->createOrder()) {
                $this->req->session()->put(self::SESSION_KEY, $this->_order->id);
            }
        }
        return $this->req->session()->get(self::SESSION_KEY);
    }

    public function delete(Request $request, int $productId)
    {
        $this->req = $request;
        $link = OrderItem::where(['product_id' => $productId, 'order_id' => $this->getOrderId()])->first();
        if (!$link) {
            return false;
        }
        return $link->delete();
    }
    
    //Получение массива товаров в корзине
    public function getItems(Request $request) 
    {
        $this->req = $request;
        return $this->getOrder()->orderItems;
    }
    

    public function setItemQuantity(Request $request, int $productId, int $quantity)
    {
        $this->req = $request;
        $link = OrderItem::where(['product_id' => $productId, 'order_id' => $this->getOrderId()])->first();
        if (!$link) {
            return false;
        }
        
        $link->quantity = $quantity;
        return $link->save();
    }
    
   
    //Получение кол-ва товаров в корзине по одной позиции товара
    /*
    public function getItemQuantity(Request $request, int $productId) 
    {
        $this->req = $request;
        $link = OrderItem::where(['product_id' => $productId, 'order_id' => $this->getOrderId()])->first();
        if (!$link) {
            return false;
        }
        return $link->itemQuantity;
    }
    */
    
    //Получение суммы в корзине по одному товару
    /*
    public function getItemAmount(Request $request, int $productId) 
    {
        $this->req = $request;
        $link = OrderItem::where(['product_id' => $productId, 'order_id' => $this->getOrderId()])->first();
        if (!$link) {
            return false;
        }
        return $link->itemAmount;
    }
    */

    public function getStatus(Request $request)
    {
        $this->req = $request;
        
        if ($this->isEmpty()) {
            return false;
        }
        
        $result['totalQuantity'] = $this->getOrder()->totalQuantity();
        $result['totalAmount'] = $this->getOrder()->totalAmount();
        
        return $result;
    }
    
    private function isEmpty()
    {
        //Если пользователь залогинился 
        if ($this->req->user()) {
            //и под его именем есть заказы в БД
            if (Order::where('user_id', $this->req->user()->id)->first()) {
                return false;
            }
        }
        
        //Если в БД нет заказов под залогиненым пользователем - проверка выше
        //и в сессии нет поля заказа
        if (!$this->req->session()->has(self::SESSION_KEY)) {
            return true;
        }
        //В сессии есть поле заказа
        else {
            return false;
        }
    }
    
    public function getActOrderFromUser(int $userId) 
    {
        $actualOrderForUser = Order::where(['user_id' => $userId, 'status' => 1])->first(); //Что будет, если протзователя не найдется в таблице заказов?
        return $actualOrderForUser->id ?? null;
    }
    
    public function saveUserForOrder(int $userId, int $orderId) 
    {
        $order = Order::where('id', $orderId)->first();
        //Если у данного ордера действительно еще нет пользователя
        if(!$order->user_id) {
            $order->user_id = $userId;
            $order->save();   
        }
    }
    
    public function saveNewOrderForUser(int $userId, int $newOrderId, int $oldOrderId) 
    {
        //Удалить все ордера от переданного юзера со статусом 2, за исключением oldOrder (текущий сохраненный в БД ордер)
        Order::where(['user_id' => $userId, 'status' => 2])->where('id', '<>', $oldOrderId)->delete();
        
        //текущий сохраненный в БД ордер для данного юзера
        $oldOrder = Order::where('id', $oldOrderId)->first();
        //Текущий ордер из сессии
        $newOrder = Order::where('id', $newOrderId)->first();
        
        if($oldOrder && $newOrder) {
            if($oldOrder->status == 1) {
                //Ордер с этим пользователем, который был сохранен в базе ранее как актуальный - помечаем как "старый"
                $oldOrder->status = 2;
                $oldOrder->save();
            }
            if($newOrder->status == 2) {
                $newOrder->status = 1;
                $newOrder->save();
            }
            if(!$newOrder->user_id) {
                //Новый актуальный ордер в БД для залогиненного юзера
                $newOrder->user_id = $userId;
                $newOrder->save();   
            }
        }
    }
}