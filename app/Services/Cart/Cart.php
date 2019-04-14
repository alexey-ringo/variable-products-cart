<?php
declare(strict_types=1);
namespace App\Services\Cart;

use Illuminate\Http\Request;
use App\Services\Cart\Models\Order;
use App\Services\Cart\Models\OrderItem;
use Illuminate\Database\Eloquent\Collection;

Interface Cart {
    public function add(Request $request, int $productId, int $quantity, array $addAttributes = null): ?OrderItem;
    public function delete(Request $request, int $productId): bool;
    public function getItems(Request $request): Collection;
    public function setItemQuantity(Request $request, int $productId, int $quantity): bool;
    public function getItemAmount(Request $request, int $productId): ?float;
    public function getTotalQuantity(Request $request): ?int;
    public function getTotalAmount(Request $request): ?float;
    public function getActOrderFromUser(int $userId): ?int; 
    public function saveUserForOrder(int $userId, int $orderId): bool;
    public function saveNewOrderForUser(int $userId, int $newOrderId, int $oldOrderId): bool;
    public function getOldOrderItems(Request $request);
    public function getHoldOrderItems(Request $request);
}
