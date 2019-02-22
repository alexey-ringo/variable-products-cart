<?php
namespace App\Services\Cart;

use Illuminate\Http\Request;
use App\Services\Cart\Models\Order;
use App\Services\Cart\Models\OrderItem;

Interface Cart {
    public function add(Request $request, int $productId, int $quantity);
    public function getOrder();
    public function delete($productId);
    public function setQuantity($productId, $quantity);
    public function getStatus();
    public function isEmpty();
}
