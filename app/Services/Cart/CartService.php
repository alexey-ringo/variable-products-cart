<?php

namespace App\Services\Cart\Models;

use Illuminate\Http\Request;
use App\Services\Cart\Models\Order;
use App\Services\Cart\Models\OrderItem;

class CartService implements Cart {
    const SESSION_KEY = 'order_id';

    private $_order;
    private $req = null;

    public function add(Request $request, int $productId, int $quantity)
    {
        $this->req = $request;
        
        //$link = OrderProduct::findOne(['product_id' => $productId, 'order_id' => $this->order->id]);
        $link = OrderItem::where(['product_id' => $productId, 'order_id' => $this->order->id])->firstOrFail();
            
        if (!$link) {
        //    $link = new OrderProduct();
            $link = new Order;
        }
        
        $link->product_id = $productId;
        $link->order_id = $this->order->id;
        $link->quantity += $quantity;
        return $link->save();
    }
   
    public function getOrder()
    {
        if ($this->_order == null) {
            $this->_order = Order::findOrFail(['id' => $this->getOrderId()]);
        }
        return $this->_order;
    }

    private function getOrderId()
    {
        if (!$req->session()->has(self::SESSION_KEY)) {
            if ($this->createOrder()) {
                $req->session()->put(self::SESSION_KEY, $this->_order->id);
            }
        }
        return $req->session()->get(self::SESSION_KEY);
    }

    public function delete(int $productId)
    {
        $link = OrderItem::where(['product_id' => $productId, 'order_id' => $this->getOrderId()])->firstOrFail();
        if (!$link) {
            return false;
        }
        return $link->delete();
    }

    public function setQuantity(int $productId, int $quantity)
    {
        $link = Order::where(['product_id' => $productId, 'order_id' => $this->getOrderId()])->firstOrFail();
        if (!$link) {
            return false;
        }
        $link->quantity = $quantity;
        return $link->save();
    }

    public function getStatus()
    {
        /*
        if ($this->isEmpty()) {
            return Yii::t('app', 'В корзине пусто');
            
        }
        return Yii::t('app', 'В корзине {productsCount, number} {productsCount, plural, one{товар} few{товара} many{товаров} other{товара}} на сумму {amount} руб.', [
            'productsCount' => $this->order->productsCount,
            'amount' => $this->order->amount
        ]);
        */
    }

    public function isEmpty()
    {
        if (!$req->session()->has(self::SESSION_KEY)) {
            return true;
        }
        return $this->order->productsQuantity ? false : true;
    }
}