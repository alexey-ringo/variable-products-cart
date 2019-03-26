<?php
namespace App\Services\Cart;

use Illuminate\Http\Request;
use App\Services\Cart\Models\Order;
use App\Services\Cart\Models\OrderItem;

Interface Cart {
    public function add(Request $request, int $productId, int $quantity, Array $AddAttributes = null);
    public function delete(Request $request, int $productId);
    public function getItems(Request $request);
    public function setItemQuantity(Request $request, int $productId, int $quantity);
    public function getStatus(Request $request);
    public function getActOrderFromUser(int $userId); 
    public function saveUserForOrder(int $userId, int $orderId);
    public function saveNewOrderForUser(int $userId, int $newOrderId, int $oldOrderId); 
}
