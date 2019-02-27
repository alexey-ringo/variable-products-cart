<?php

namespace App\Services\Cart\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    
    protected $fillable = ['user_id'];
    //
    public function orderItems()
    {
        return $this->hasMany('App\Services\Cart\Models\OrderItem');
    }
    
    public function totalQuantity()
    {
        return $this->orderItems->sum('quantity');
    }
    
    public function totalAmount()
    {
        $orderItems = $this->orderItems;
        $sumItem = 0;
        foreach($orderItems as $orderItem) {
            $sumItem += $orderItem->quantity * $orderItem->order_price;
        }
        return $sumItem;
    }
}
