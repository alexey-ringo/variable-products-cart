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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        return view('shop.category', [
            'groupproducts' => Groupproduct::orderBy('id')->paginate(9)
            ]);
    }
    
    public function category(string $slug = null)
    {
        $category = Category::where('slug', $slug)->get();
        
        $groupproducts = Groupproduct::with('categories')->whereHas('categories', function($query) use($slug) {
            $query->where('slug', $slug);
        })->get();
        
        //dd($category);
        return view('shop.category', [
            'groupproducts' => $groupproducts,
            'category' => $category
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
        
        return view('shop.product', [
            'groupproduct' => $groupproduct,
            'products' => $groupproduct->products()->where('groupproduct_id', $groupproduct->id)->get()
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
