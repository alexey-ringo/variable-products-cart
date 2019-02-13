<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupproduct extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    
    
}
