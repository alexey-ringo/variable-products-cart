<?php

namespace App\Http\Controllers;

use App\Category;
use App\Groupproduct;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.index');
    }
    

    public function categories(Request $request) {
        $category = null;
        $slug = $request->slug;
        
        if($slug) {
            $category = Category::where('slug', $slug)->first();
            $groupproducts = Groupproduct::groupproductsInCategory($slug)->get();
        }
        else {
            $groupproducts = Groupproduct::orderBy('id')->get();
        }
        
        if($request->ajax()) {
            return response()->json([
            'groupproducts' => $groupproducts,
            'menu_categories' => Category::with('childrenCat')->where('parent_id', 0)/*->where('published', 1)*/->get(),
            'current_category' => $category ?? ''
            ]);
        }
        else {
            return view('shop.category', [
            'groupproducts' => json_encode($groupproducts),
            'menu_categories' => json_encode(Category::with('childrenCat')->where('parent_id', 0)/*->where('published', 1)*/->get()),
            'current_category' => json_encode($category)
            ]);
        }
        
    }
    
   


    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $groupproduct = Groupproduct::where('slug', $slug)->firstOrFail();
        $products = $groupproduct->products()->with('color', 'size')->get();
        $relatedProducts = Groupproduct::relatedProducts($slug)->get();
        
        $result['groupproduct'] = $groupproduct->toArray();
        $result['products'] = $products->toArray();
        
        return view('shop.product', [
            'result' => json_encode($result),
            'relatedProducts' => $relatedProducts
            ]);
    }
}
