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
    
    public function productsQuantity()
    {
        //
    }
}
