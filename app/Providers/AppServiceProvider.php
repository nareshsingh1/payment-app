<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Contracts\PaymentGatewayInterface;
use App\Services\StripePaymentGateway;
use App\Services\PaypalPaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('stripe', function() {
             return new StripePaymentGateway();
        });

        $this->app->bind('paypal', function() {
            return new PaypalPaymentGateway();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
