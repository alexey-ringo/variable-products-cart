<?php
declare(strict_types=1);
namespace App\Services\Purchase;

use Illuminate\Http\Request;

use App\Services\Purchase;
use App\Services\Order;
use App\Services\OrderItem;
use Illuminate\Database\Eloquent\Collection;

Interface PurchaseInterface {
    public function checkout(Request $requers, Order $order): ?Purchase;
}
