<?php

namespace App\Http\Controllers;

use App\Groupproduct;
use App\Product;
use Illuminate\Http\Request;
use App\Services\Cart\Cart;
use App\Services\Cart\CartService;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addCart(Request $request, Cart $cart)
    {
        if (!$request->isMethod('post')){  
            return false;
        }
        
        $productId = $request->input('product');
        $quantity = $request->input('quantity');
        //dd($productId);
        $cart->add($request, $productId, $quantity);
        //$cart->
        
        //return response()->json(['response' => $cart->add($request, $productId, $quantity)]); 
            return response()->json(['response' => 'ОК']);
        //return json_encode(['response' => $cart->add($request, $productId, $quantity)]);
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  null
     * @return \Illuminate\Http\Response
     */
    public function showCart(Request $request, Cart $cart)
    {
        //if (!$request->isMethod('post')){  
        //    return false;
        //}
        
        
        $itemsInOrder = $cart->getItems($request);
        $cartStatus = $cart->getStatus($request);
        return view('shop.cart', [
            'itemsInOrder' => $itemsInOrder,
            'cartStatus' => $cartStatus,
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
    public function updateCart(Request $request, Cart $cart)
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
