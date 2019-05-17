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
    public function addItem(Request $request, int $productId, int $quantity, array $addAttributes = null): ?OrderItem
    {
        $this->req = $request;
        //При добавлении первого товара создаем новый Ордер в сессии: getOrder() -- getOrderId() -- createOrder()
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
    private function getOrder(): Order
    {
        if ($this->_order == null) {
            $this->_order = Order::where(['id' => $this->getOrderId()])->first();
        }
        $localOrder = $this->_order;
        Log::info('getOrder()', ['localOrder' => $localOrder]);
        return $this->_order;
    }
    
    /**
     * Get current order id.
     *
     * @param  void
     * 
     * @return int | null
     */
    private function getOrderId(): int
    {
        /*
        if (Auth::guard('web')->check()) {
            $user = User::find($this->req->user()->id);
            return $this->getActOrderByUser($user);
        }
        */
        $this->checkOrderOfPurchase();
        //Если в сессии нет ключа текущего Ордера
        if (!$this->req->session()->has(self::SESSION_KEY)) {
            //создаем новый Ордер и записываем его в кэш-переменнную.
            if ($this->createOrder()) {
                //Если при этом еще есть зарегистрированный пользователь
                if ($this->req->user()) {
                    $user = User::find($this->req->user()->id);
                    $this->saveUserForOrder($user, $this->_order->id);
                }
                $this->req->session()->put(self::SESSION_KEY, $this->_order->id);
            }
        }
        //Просто возвращаем тот ключ Ордера из сессии - котрый там был
        return $this->req->session()->get(self::SESSION_KEY);
    }
   
    /**
     * Create new order.
     *
     * @param  void 
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
    

    
    private function checkOrderOfPurchase(): bool
    {
        //Проверяем - есть ли вообще Ордер в сессии? 
        if (!$this->req->session()->has(self::SESSION_KEY)) {
            //и в кэш-переменной Ордера?
            if($this->_order) {
                $this->_order = null;
            }
            //Если нет - действие всей функции завершается
            Log::info('CheckOrderOfPurchase() - ключ в сессии и кэш-переменная Ордера были и их удалили');
            return false;
        }
        
        //Проверяем Ордер на наличие у него статуса 4 в таблице Ордер
        Log::info('checkOrderOfPurchase() - сессия есть - получаем order_id', ['Order_id' => $this->req->session()->get(self::SESSION_KEY)]);
        $purchasedOrder = Order::where(['id' => $this->req->session()->get(self::SESSION_KEY)])->where('status', '=', 4)->first();
        Log::info('checkOrderOfPurchase() - по order_id в базе искали все ордера с этим id и статусом = 4 ', ['purchasedOrder' => $purchasedOrder]);
        if($purchasedOrder) {
            $this->req->session()->forget(self::SESSION_KEY);
            $this->_order = null;
            Log::info('Test checkOrderOfPurchase', ['_Order' => $this->_order]);
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

    public function deleteItem(Request $request, int $productId): bool
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
    public function getItems(Request $request): ?\Illuminate\Database\Eloquent\Collection
    {
        $this->req = $request;
        if ($this->isEmpty()) {
            return null;
        }
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
        return $this->getOrder() ? $this->getOrder()->totalAmount() : null;
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
        //if(Auth::guard('web')->check()) {
            //и под его именем есть актуальный (status == 1) заказ в БД
        //    if (Order::where(['user_id' => $this->req->user()->id, 'status' => 1])->first()) {
                
        //        return false;
        //    }
        //}
        
        //Если в БД нет актуальных заказов под залогиненым пользователем (это проверка выше),
        
        //и если в сессии нет поля заказа - т.е. нет актуального заказа
        if (!$this->req->session()->has(self::SESSION_KEY)) {
            return true;
        }
        return false;
    }
    
    /**
     * Get orderId with status=1 for current User.
     *
     * @param  int  $userId 
     * @return int | null
     */
    public function getActOrderByUser(User $user): ?int 
    {
        $actualOrderForUser = Order::where(['user_id' => $user->id, 'status' => 1])->first(); //Что будет, если протзователя не найдется в таблице заказов?
        //$actualOrderForUser = Order::where(['user_id' => $user->id])->where('status', '=', 1)->orWhere('status', '=', 4)->first();
        
        //if($actualOrderForUser->status == 4){
        //    return null;
        //}
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
        $order = Order::find($orderId);
        if(!$order) {
            return false;
        }
        //Если у данного ордера действительно еще нет пользователя
        if(!$order->user_id) {
            $order->user_id = $user->id;
            if($order->save()) {
                $this->_order->user_id = $order->user_id;
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
    
    public function holdItem (Request $request, int $productId): bool
    {
        $this->req = $request;
        $orderItem = OrderItem::where(['product_id' => $productId, 'order_id' => $this->getOrderId()])->first();
        if (!$orderItem) {
            return false;
        }
        
       
        
    }
    
    public function getOrderForPurchase(Request $request): Order 
    {
        $this->req = $request;
        return $this->getOrder();
    }
    
    public function setAfterPurchase (Request $request, int $orderId): bool 
    {
        $this->req = $request;
        if($this->req->session()->has(self::SESSION_KEY)) {
            if($this->req->session()->get(self::SESSION_KEY) === $orderId) {
                $this->req->session()->forget(self::SESSION_KEY);
                 Log::info('setAfterPurchase() - стерли сессию');
            }
        }
        if($this->_order->id === $orderId) {
            $this->_order = null;
            Log::info('setAfterPurchase() - обнулили кэш Ордера');
        }
        return true;
    }
}