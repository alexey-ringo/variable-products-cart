<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'images' => 'array'
        ];
        
    public function groupproduct()
    {
        $this->belongsTo('App\Groupproduct');
    }
}
