<?php

namespace App\Http\Controllers;

use App\Groupproduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Services\Cart\Cart;


use Session;

class CartController extends Controller
{
    /**
     * Create and add item into Cart
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Services\Cart\Cart  $cart
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
        
        $result = $cart->add($request, $productId, $quantity, $addOptions);
        
        if($result) {
            return response()->json(['response' => $result]);
        }
        else {
            return response()->json(0);
        }
    }

    /**
     * Display the Cart page with vue-cart-component.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Services\Cart\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function showCart(Request $request, Cart $cart)
    {
        return view('shop.cart');

    }
    
    public function statusCart(Request $request, Cart $cart)
    {
        return response()->json([
            'totalQuantity' => $cart->getTotalQuantity($request),
            'totalAmount' => $cart->getTotalAmount($request),
            ]);

    }
    
    /**
     * Get all products in cart as Collection into json
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Services\Cart\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function productsInCart(Request $request, Cart $cart)
    {
        return response()->json([
            'itemsInOrder' => $this->toArray($cart->getItems($request))
            ]);

    }
    
    /**
     * Get Amount of single Cart Item.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Services\Cart\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function itemAmount(Request $request, Cart $cart)
    {
        $productId = $request->input('product');
        $result = $cart->getItemAmount($request, $productId);
        
        if($result) {
            return response()->json(['itemAmount' => $result]);
        }
        else {
            return response()->json(0);
        }

    }
    
    public function productsInOldCart(Request $request, Cart $cart)
    {
        return response()->json([
            'itemsInOldOrder' => $this->toArray($cart->getOldOrderItems($request))
            ]);

    }
    
    public function productsInHoldCart(Request $request, Cart $cart)
    {
        return response()->json([
            'itemsInHoldOrder' => $this->toArray($cart->getHoldOrderItems($request))
            ]);

    }
    
    
    /**
     * Update Cart Item Quantity.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Services\Cart\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function updateCart(Request $request, Cart $cart)
    {
        if (!$request->isMethod('post')){  
            return false;
        }
        
        $productId = $request->input('productId');
        $qty = $request->input('quantity');
        if($cart->setItemQuantity($request, $productId, $qty)) {
            return response()->json(1);
        }
        else {
            return response()->json(0);
        }
    }


    /**
     * Remove Cart Item.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Services\Cart\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function deleteCart(Request $request, Cart $cart)
    {
        if (!$request->isMethod('post')){  
            return false;
        }
        
        $productId = $request->input('product');
        if($cart->delete($request, $productId)) {
            return response()->json(1);
        }
        else {
            return response()->json(0);
        }
    }
    
    private function toArray(Collection $collection) {
        return $collection->toArray();
    }

}
