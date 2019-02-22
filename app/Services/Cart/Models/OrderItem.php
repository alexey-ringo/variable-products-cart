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
}
