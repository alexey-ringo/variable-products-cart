<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';
    //
    protected $fillable = ['order_id', 'name', 'surname', 'sity', 'street', 'building', 'flat', 'email', 'phone', 'comment', 'payment_method', 'delivery_method', 'status'];
    
    //public function order()
    //{
    //    return $this->hasOne('App\Services\Order');
    //}
    
    public function order()
    {
        return $this->belongsTo('App\Services\Order');
    }
}
