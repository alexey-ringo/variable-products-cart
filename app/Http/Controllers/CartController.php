<?php

namespace App\Http\Controllers;

use App\Groupproduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Services\Cart\Cart;
use App\Services\Cart\CartService;

use Session;

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
        
        //$product = Product::where('id', $productId)->first();
        $product = Product::find($productId);
        $groupproduct = $product->groupproduct;
        
        $addOptions['product'] = $product->toArray();
        $addOptions['groupproduct'] = $groupproduct->toArray();
        
        //$groupproduct = Groupproduct::with('products')->whereHas('products', function($query) use($productId) {
        //    $query->where('id', $productId);
        //})->first();
        
        //dd($groupproduct);
        
        $result = $cart->add($request, $productId, $quantity, $addOptions);
        
        
        return response()->json(['response' => $result]);
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
        //$itemsInOrder = $this->toArray($cart->getItems($request));
        //$cartStatus = $cart->getStatus($request);
        return view('shop.cart'/*, [
            'itemsInOrder' => json_encode($itemsInOrder),
            'cartStatus' => json_encode($cartStatus),
            ]*/);

    }
    
    public function statusCart(Request $request, Cart $cart)
    {
        return response()->json(['cartStatus' => $cart->getStatus($request)]);

    }
    
    public function productsCart(Request $request, Cart $cart)
    {
        return response()->json([
            'itemsInOrder' => $this->toArray($cart->getItems($request)),
            'cartStatus' => $cart->getStatus($request)
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
    
    private function toArray(Collection $collection) {
        return $collection->toArray();
    }

}
