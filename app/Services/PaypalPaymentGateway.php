<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class PaypalPaymentGateway implements PaymentGatewayInterface
{
    public function pay(float $amount): string
    {
        return "✅ Paid ₹{$amount} using PayPal!";
    }
}
