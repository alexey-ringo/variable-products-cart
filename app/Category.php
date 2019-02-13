<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public function childrenCat() {
        return $this->hasMany(self::class, 'parent_id');
    }
    
    public function groupproducts()
    {
        return $this->belongsToMany('App\Groupproduct');
    }
}
