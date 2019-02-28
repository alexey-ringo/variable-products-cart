<?php

namespace App\Services\Cart;

use Illuminate\Http\Request;
use App\Services\Cart\Cart;
use App\Services\Cart\Models\Order;
use App\Services\Cart\Models\OrderItem;

use Event;
use App\Events\Cart\onAddItemEvent;


class CartService implements Cart {
    const SESSION_KEY = 'order_id';

    private $_order;
    private $req;

    public function add(Request $request, int $productId, int $quantity)
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
        
        if($link->save()) {
            Event::fire(new onAddItemEvent($link));
            return true;
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
            return true;
        }
        return false;
    }

    private function getOrderId()
    {
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
        
        /*
        return Yii::t('app', 'В корзине {productsCount, number} {productsCount, plural, one{товар} few{товара} many{товаров} other{товара}} на сумму {amount} руб.', [
            'productsCount' => $this->order->productsCount,
            'amount' => $this->order->amount
        ]);
        */
    }
    
    
    //public function getTotalAmount(Request $request)
    //{
    //   $this->req = $request;
    //    if ($this->isEmpty()) {
    //        return false;
    //    }
    //    return $this->getOrder()->totalAmount;
        /*
        return Yii::t('app', 'В корзине {productsCount, number} {productsCount, plural, one{товар} few{товара} many{товаров} other{товара}} на сумму {amount} руб.', [
            'productsCount' => $this->order->productsCount,
            'amount' => $this->order->amount
        ]);
        */
    //}

    private function isEmpty()
    {
        if (!$this->req->session()->has(self::SESSION_KEY)) {
            return true;
        }
        //return $this->order->productsQuantity ? false : true;
    }
}