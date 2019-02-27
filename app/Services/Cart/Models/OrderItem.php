<?php

namespace App\Services\Cart\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';
    
    protected $fillable = ['order_id', 'product_id', 'quantity', 'order_price'];
    //
    public function order()
    {
        $this->belongsTo('App\Services\Cart\Models\Order');
    }
    
     public function getItemQuantity()
    {
        return $this->quantity;
    }
    
    public function getItemAmount()
    {
        return $this->quantity * $this->order_price;
    }
    
    public function getProductPrice()
    {
        return 13;
    }
}
