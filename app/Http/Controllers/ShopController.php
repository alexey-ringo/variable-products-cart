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
    

    
    /*
    public function categories()
    {
        return view('shop.category');
    }
    
    public function category(string $slug = null)
    {
        $category = Category::where('slug', $slug)->first();
        
        $groupproducts = Groupproduct::with('categories')->whereHas('categories', function($query) use($slug) {
            $query->where('slug', $slug);
        })->get();
        
        return view('shop.category', [
            'groupproducts' => $groupproducts,
            'category' => $category,
            'menu_categories' => json_encode(Category::with('childrenCat')->where('parent_id', 0)->get()),
            'current_category' => json_encode($category)
            ]);
    }
    */
    
    public function categories() {
        $category = null;
        
        if(request()->slug) {
            $slug = request()->slug;
            $category = Category::where('slug', $slug)->first();
            $groupproducts = Groupproduct::with('categories')->whereHas('categories', function($query) use($slug) {
                $query->where('slug', $slug);
            })->get();
        }
        else {
            $groupproducts = Groupproduct::orderBy('id')->get();
        }
        
        return view('shop.category', [
            'groupproducts' => json_encode($groupproducts),
            'menu_categories' => json_encode(Category::with('childrenCat')->where('parent_id', 0)/*->where('published', 1)*/->get()),
            'current_category' => json_encode($category)
            ]);
    }
    
    
    public function categoriesAjax()
    {
        $category = null;
        
        if(request()->slug) {
            $slug = request()->slug;
            $category = Category::where('slug', $slug)->first();
            $groupproducts = Groupproduct::with('categories')->whereHas('categories', function($query) use($slug) {
                $query->where('slug', $slug);
            })->get();
        }
        else {
            $groupproducts = Groupproduct::orderBy('id')->get();
        }
        
        return response()->json([
            'groupproducts' => $groupproducts,
            'menu_categories' => Category::with('childrenCat')->where('parent_id', 0)/*->where('published', 1)*/->get(),
            'current_category' => $category ?? ''
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        
        $result['groupproduct'] = $groupproduct->toArray();
        $result['products'] = $products->toArray();
        
        return view('shop.product', [
            'result' => json_encode($result)
            ]);
    }
}
