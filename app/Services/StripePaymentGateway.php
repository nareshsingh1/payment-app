<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class StripePaymentGateway implements PaymentGatewayInterface
{
    public function pay(float $amount): string
    {
        return "✅ Paid ₹{$amount} using Stripe!";
    }
}
