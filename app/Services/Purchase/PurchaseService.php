<?php
declare(strict_types=1);

namespace App\Services\Purchase;

use Illuminate\Http\Request;
use App\Services\Purchase\PurchaseInterface;

use App\Services\Purchase;
use App\Services\Order;
use App\Services\OrderItem;


use Event;
use App\Events\Cart\onCheckoutEvent;

use Log;

class PurchaseService implements PurchaseInterface {
    private $req;
    
    public function checkout(Request $request, Order $order): ?Purchase
    {
        $this->req = $request;
        
        if($order->status != 1) {
            return null;
        } 
        
        if(Purchase::where('order_id', $order->id)->first()) {
            return null;
        } 
        
        $purchase = Purchase::Create([
                'order_id' => $order->id,
                'name' => $request->name,
                'surname' => $request->surname,
                'sity' => $request->sity,
                'street' => $request->street,
                'building' => $request->building,
                'flat' => $request->flat,
                'email' => $request->email,
                'phone' => $request->phone,
                'comment' => $request->comment,
                
            ]);
            
        
        if($purchase->save()) {
            $order->status = 4;
            $order->purchase_id = $purchase->id;
            if ($order->save()) {
                return $purchase;
            }
        }
        return null;
    }
    
    public function checkDoubleCheckout ()
    {
        
    }
   
}