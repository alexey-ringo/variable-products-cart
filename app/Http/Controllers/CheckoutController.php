<?php

namespace App\Http\Controllers;

//use App\Groupproduct;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
//use Illuminate\Support\Facades\Mail;
//use App\Mail\OrderPlaced;
use Event;
use App\Events\Cart\onCheckoutEvent;

//use App\Http\Requests\CheckoutRequest;
use App\Services\Cart\Cart;
use App\Services\Purchase\PurchaseInterface;
use Validator;




use Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.checkout');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request, Cart $cart, PurchaseInterface $purchase)
    {
        //if (!$request->isMethod('post')){  
        //    return 0;
        //}
        
        $validator = Validator::make(json_decode($request->getContent(), true), [
            'name' => 'required',
            'surname' => 'required',
            'sity' => 'required',
            'street' => 'required',
            'building' => 'required',
            'flat' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11',

        ]);
        
        /*
        $rules = [
            'name' => 'required',
            'surname' => 'required',
            'sity' => 'required',
            'street' => 'required',
            'building' => 'required',
            'flat' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11'
        ];
        */
        //$validator = $this->validate($request, $rules/*, $messages*/);
        
        //$validator->passes()
        
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        
        $resultPurchase = $purchase->checkout($request, $cart->getOrderForPurchase($request));
        
        if($resultPurchase) {
            if(!Event::fire(new onCheckoutEvent($resultPurchase))) {
                return response()->json(0);
            }
            $cart->setAfterPurchase($request, $resultPurchase->order_id);
            return response()->json(['purchase' => $resultPurchase]);
        }
        return response()->json(0);
    }

}
