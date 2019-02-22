<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Cart\Cart;
use App\Services\Cart\CartService;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Cart::class, function() {
            return new CartService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
