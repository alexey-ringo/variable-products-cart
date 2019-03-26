<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            ],
        'App\Events\Cart\onAddItemEvent' => [
            'App\Listeners\Cart\AddItemListener'
            ],
        'App\Events\System\onSessionDestroyEvent' => [
            'App\Listeners\Cart\SessionDestroyListener'
            ],
            
        //'Illuminate\Auth\Events\Authenticated' => [
        //    'App\Listeners\Cart\LogAuthenticated',
        //    ],
        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\Cart\LogSuccessfulLogin',
            ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
