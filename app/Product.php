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
        return $this->belongsTo('App\Groupproduct');
    }
    
    public function color()
    {
        return $this->belongsTo('App\Color');
    }
    
    public function size()
    {
        return $this->belongsTo('App\Size');
    }
}
