<?php

namespace App\Services\Cart\Models;

use Illuminate\Database\Eloquent\Model;
use App\Product;
//use App\Groupproduct;

class OrderItem extends Model
{
    protected $table = 'order_items';
    protected $casts = [
        'add_attributes' => 'array'
        ];
    protected $fillable = ['order_id', 'product_id', 'quantity', 'order_price', 'add_attributes'];
    //
    
    public function order()
    {
        $this->belongsTo('App\Services\Cart\Models\Order');
    }
    
    public function product() 
    {
        return $this->belongsTo('App\Product');
    }
    /*
    public function groupproduct()
        {
        return $this->hasManyThrough(
              'App\Groupproduct', 
              'App\Product',
              'id', 
              'product_id', 
              'id'
              
        );
    }
    */
    
    public function getItemQuantity()
    {
        return $this->quantity;
    }
    
    public function getItemAmount()
    {
        return $this->quantity * $this->order_price;
    }
    /*
    public function getProductName() {
        
    }
    
    public function getProductImage() {
        
    }
    */
    public function getProductPrice()
    {
        //$product = $this->product()->first();
        //$groupproduct = $product->groupproduct()->first();
        //return $groupproduct->price;
        return $this->product->groupproduct->price;
    }
    
    
    
    
}
