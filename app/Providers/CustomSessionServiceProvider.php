<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Handlers\CustomFileSessionHandler;
use App\Handlers\CustomDatabaseSessionHandler;

class CustomSessionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->customDatabaseSessionHandler();
    }
    
    
    
    public function customFileSessionHandler() {
        
    }
    
    public function customDatabaseSessionHandler() {
        Session::extend('customDatabase', function ($app) {
            $connection = $app['config']['session.connection'];
            $table = $app['config']['session.table'];
            $lifetime = $app['config']['session.lifetime'];
            $connection = $app['db']->connection($connection);
            return new CustomDatabaseSessionHandler($connection, $table, $lifetime, $app);
        });
    }
}
