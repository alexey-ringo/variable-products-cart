<?php
declare(strict_types=1);

namespace App\Services\Cart;

use Illuminate\Http\Request;
use App\Services\Cart\Cart;
use App\User;
use App\Services\Order;
use App\Services\OrderItem;
use App\Jobs\ClearCart;

use Auth;
use Log;

class CartService implements Cart {
    const SESSION_KEY = 'order_id';

    private $_order;
    private $_oldOrder;
    private $_postponedOrder;
    private $req;
    
    /**
     * Add order to Cart
     *
     * @param  Illuminate\Http\Request $request
     * @param  int $productId
     * @param  int $quantiry
     * @param  array $addAttributes | null
     * 
     * @return App\Services\Cart\Models\OrderItem | null
     */
    public function add(Request $request, int $productId, int $quantity, array $addAttributes = null): ?OrderItem
    {
        $this->req = $request;
        
        $link = OrderItem::firstOrNew(['product_id' => $productId, 'order_id' => $this->getOrder()->id]);
        
        $link->order_price = $link->getProductPrice();
        $link->quantity = $link->quantity + $quantity;
        $link->add_attributes = $addAttributes;
        
        if($link->save()) {
            return $link;
            }
        return null;
    }
    
    /**
     * Get current order.
     *
     * @param  void
     * 
     * @return App\Services\Cart\Models\Order
     */
    private function getOrder(): ?Order
    {
        if ($this->_order == null) {
            $this->_order = Order::where(['id' => $this->getOrderId()])->first();
        }
        return $this->_order;
    }
   
    /**
     * Create new order.
     *
     * @param  void
     * 
     * @return bool
     */
    private function createOrder(): bool
    {
        $order = new Order;
        if ($order->save()) {
            $this->_order = $order;
            //ClearCart::dispatch($order)->delay(now()->addMinutes(2));
            //ClearCart::dispatch('send message about queue start');
            return true;
        }
        return false;
    }
    
    /**
     * Get current order id.
     *
     * @param  void
     * 
     * @return int | null
     */
    private function getOrderId(): ?int
    {
        /*
        if ($this->req->user()) {
            $user = User::find($this->req->user()->id);
            return $this->getActOrderByUser($user);
        }
        */
        if (Auth::guard('web')->check()) {
            $user = User::find($this->req->user()->id);
            return $this->getActOrderByUser($user) ?? null;
        }
        
        if($this->checkOrderOfPurchase()){
            return null;
        }
        
        if (!$this->req->session()->has(self::SESSION_KEY)) {
            if ($this->createOrder()) {
                $this->req->session()->put(self::SESSION_KEY, $this->_order->id);
            }
            else {
                return null;
            }
        }
        return $this->req->session()->get(self::SESSION_KEY);
    }
    
    private function checkOrderOfPurchase(): bool
    {
        //Проверяем - есть ли вообще Ордер в сессии? Если нет - действие всей функции завершается
        if (!$this->req->session()->has(self::SESSION_KEY)) {
            Log::info('Test checkOrderOfPurchase - detect of session without key');
            return false;
        }
        
        //Проверяем Ордер на наличие у него статуса 4 в таблице Ордер
        Log::info('Test checkOrderOfPurchase - get Order_id from session', ['Order_id' => $this->req->session()->get(self::SESSION_KEY)]);
        $purchasedOrder = Order::where(['id' => $this->req->session()->get(self::SESSION_KEY)])->where('status', '=', 4)->first();
        Log::info('Test checkOrderOfPurchase - get $purchasedOrder', ['purchasedOrder' => $purchasedOrder]);
        if($purchasedOrder) {
            $this->req->session()->forget(self::SESSION_KEY);
            $_order = null;
            Log::info('Test checkOrderOfPurchase', ['_Order' => $_order]);
            return true;
        }
        return false;
    }
    
    /**
     * Delete item in Cart
     *
     * @param  Illuminate\Http\Request $request
     * @param  int $productId
     *  
     * @return bool
     */

    public function delete(Request $request, int $productId): bool
    {
        $this->req = $request;
        $link = OrderItem::where(['product_id' => $productId, 'order_id' => $this->getOrderId()])->first();
        if (!$link) {
            return false;
        }
        
        if($link->delete()) {
            return true;
        }
        return false;
    }
    
    
    /**
     * Get all items for current order.
     *
     * @param  Request $request
     * 
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getItems(Request $request): \Illuminate\Database\Eloquent\Collection
    {
        $this->req = $request;
        return $this->getOrder()->orderItems;
    }
    
    /**
     * Set product quantity for target item.
     *
     * @param  Request $request
     * @param  int $productId
     * @param  int $quantity
     * @return bool
     */
    public function setItemQuantity(Request $request, int $productId, int $quantity): bool
    {
        $this->req = $request;
        $link = OrderItem::where(['product_id' => $productId, 'order_id' => $this->getOrderId()])->first();
        if (!$link) {
            return false;
        }
        
        $link->quantity = $quantity;
        if($link->save()) {
            return true;
        }
        return false;
    }
    
   
    //Получение кол-ва товаров в корзине по одной позиции товара
    /*
    public function getItemQuantity(Request $request, int $productId) 
    {
        $this->req = $request;
        $link = OrderItem::where(['product_id' => $productId, 'order_id' => $this->getOrderId()])->first();
        if (!$link) {
            return false;
        }
        return $link->itemQuantity;
    }
    */
    
    //Получение суммы в корзине по одному товару
    
    /**
     * Get amount from target item.
     *
     * @param  Request $request
     * @param  int $productId
     * 
     * @return float | null
     */
    public function getItemAmount(Request $request, int $productId): ?float 
    {
        $this->req = $request;
        $link = OrderItem::where(['product_id' => $productId, 'order_id' => $this->getOrderId()])->first();
        if (!$link) {
            return false;
        }
        return $link->getItemAmount() ?? null;
    }
    
    
     /**
     * Get Total Cart Quantity
     *
     * @param  Request $request
     * 
     * @return int | null
     */
    public function getTotalQuantity(Request $request): ?int
    {
        $this->req = $request;
        
        if ($this->isEmpty()) {
            return null;
        }
        //Почему то не работает '??' с getOrder() = null
        //return $this->getOrder()->totalQuantity() ?? null;
        return $this->getOrder() ? $this->getOrder()->totalQuantity() : null;
    }
    
     /**
     * Get Total Cart Amount
     *
     * @param  Request $request
     * 
     * @return float | null
     */
    public function getTotalAmount(Request $request): ?float
    {
        $this->req = $request;
        
        if ($this->isEmpty()) {
            return null;
        }
        
        return $this->getOrder()->totalAmount() ?? null;
    }
    
    
    
    /**
     * Check Cart for enmty status.
     *
     * @param  void 
     * @return bool
     */
    private function isEmpty(): bool
    {
        //Если пользователь залогинился
        /*
        if ($this->req->user()) {
            //и под его именем есть заказы в БД
            if (Order::where('user_id', $this->req->user()->id)->first()) {
                return false;
            }
        }
        */
        //Если пользователь залогинился
        if(Auth::guard('web')->check()) {
            //и под его именем есть заказы в БД
            if (Order::where('user_id', $this->req->user()->id)->first()) {
                return false;
            }
        }
        
        //Если в БД нет заказов под залогиненым пользователем (это проверка выше),
        //и в сессии нет поля заказа
        if (!$this->req->session()->has(self::SESSION_KEY)) {
            return true;
        }
        //В сессии есть поле заказа
        else {
            return false;
        }
    }
    
    /**
     * Get orderId with status=1 for current User.
     *
     * @param  int  $userId 
     * @return int | null
     */
    public function getActOrderByUser(User $user): ?int 
    {
        //$actualOrderForUser = Order::where(['user_id' => $user->id, 'status' => 1])->first(); //Что будет, если протзователя не найдется в таблице заказов?
        $actualOrderForUser = Order::where(['user_id' => $user->id])->where('status', '=', 1)->orWhere('status', '=', 4)->first();
        
        if($actualOrderForUser->status == 4){
            return null;
        }
        
        return $actualOrderForUser->id ?? null;
    }
    
    /**
     * Saving $userId into current actual Order while User is logging.
     *
     * @param  int  $userId
     * @param  int  $orderId
     * 
     * @return bool
     */
    public function saveUserForOrder(User $user, int $orderId): bool 
    {
        $order = Order::where('id', $orderId)->first();
        //Если у данного ордера действительно еще нет пользователя
        if(!$order->user_id) {
            $order->user_id = $user->id;
            if($order->save()) {
                return true;
            }   
        }
        return false;
    }
    
    /**
     * Change acrual status for last Order & new Order for current User.
     *
     * @param  int  $userId
     * @param  int  $newOrderId
     * @param  int  $oldOrderId
     * 
     * @return bool
     */
    public function saveNewOrderForUser(User $user, int $newOrderId, int $oldOrderId): bool 
    {
        //Удалить все ордера от переданного юзера со статусом 2, за исключением oldOrder (текущий сохраненный в БД ордер)
        Order::where(['user_id' => $user->id, 'status' => 2])->where('id', '<>', $oldOrderId)->delete();
        
        //текущий сохраненный в БД ордер для данного юзера
        $oldOrder = Order::where('id', $oldOrderId)->first();
        //Текущий ордер из сессии
        $newOrder = Order::where('id', $newOrderId)->first();
        
        if($oldOrder && $newOrder) {
            if($oldOrder->status == 1) {
                //Ордер с этим пользователем, который был сохранен в базе ранее как актуальный - помечаем как "старый"
                $oldOrder->status = 2;
                if($oldOrder->save()) {
                    return true;
                }
            }
            if($newOrder->status == 2) {
                $newOrder->status = 1;
                if($newOrder->save()) {
                    return true;
                }
            }
            if(!$newOrder->user_id) {
                //Новый актуальный ордер в БД для залогиненного юзера
                $newOrder->user_id = $user->id;
                if($newOrder->save()) {
                    return true;
                } 
            }
            return false;
        }
        return false;
    }
    
    public function getOldOrderItems(Request $request) 
    {
        
    }

    
    public function getHoldOrderItems(Request $request) 
    {
        
    }
    
    public function getOrderForPurchase(Request $request): Order 
    {
        $this->req = $request;
        return $this->getOrder();
    }
}