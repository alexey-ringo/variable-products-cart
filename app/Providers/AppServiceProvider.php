<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Cart\Models\OrderItem;
use Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \URL::forceScheme('https');
        OrderItem::saved(function(OrderItem $orderItem) {
            Log::info('Product save in OrderItem', [$orderItem->order_id => $orderItem->product_id]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
}
