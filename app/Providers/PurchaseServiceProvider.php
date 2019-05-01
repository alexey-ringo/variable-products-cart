<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Purchase\PurchaseInterface;
use App\Services\Purchase\PurchaseService;

class PurchaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PurchaseInterface::class, function() {
            return new PurchaseService();
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
