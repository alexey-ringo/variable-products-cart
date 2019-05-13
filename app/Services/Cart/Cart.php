<?php
declare(strict_types=1);
namespace App\Services\Cart;

use Illuminate\Http\Request;
use App\User;
use App\Services\Order;
use App\Services\OrderItem;
use Illuminate\Database\Eloquent\Collection;

Interface Cart {
    public function addItem(Request $request, int $productId, int $quantity, array $addAttributes = null): ?OrderItem;
    public function deleteItem(Request $request, int $productId): bool;
    public function getItems(Request $request): ?Collection;
    public function setItemQuantity(Request $request, int $productId, int $quantity): bool;
    public function getItemAmount(Request $request, int $productId): ?float;
    public function getTotalQuantity(Request $request): ?int;
    public function getTotalAmount(Request $request): ?float;
    public function getActOrderByUser(User $user): ?int; 
    public function saveUserForOrder(User $user, int $orderId): bool;
    public function saveNewOrderForUser(User $user, int $newOrderId, int $oldOrderId): bool;
    public function getOldOrderItems(Request $request);
    public function getHoldOrderItems(Request $request);
    public function holdItem(Request $request, int $productId): bool;
    public function getOrderForPurchase(Request $request): Order;
    public function setAfterPurchase (Request $request, int $orderId): bool;
}
