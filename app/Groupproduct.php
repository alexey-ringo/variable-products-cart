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
    
    public function scopeGroupproductsInCategory($query, $slug)
    {
        return $query->with('categories')->whereHas('categories', function($query) use($slug) {
                $query->where('slug', $slug);
            });
    }
    
    public function scopeRelatedProducts($query, $prodSlug)
    {
        $groupproduct = self::where('slug', $prodSlug)->first();
        $cat = $groupproduct->categories()->first();
        $catSlug = $cat->slug;
       
        return $query->with('categories')->whereHas('categories', function($query) use($catSlug) {
                $query->where('slug', $catSlug);
                })->where('id', '!=', $groupproduct->id);
    }
    
    
}
