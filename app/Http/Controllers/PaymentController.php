<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.form');
    }

    public function pay(Request $request)
    {
        $amount = $request->input('amount', 0);
        $gatewayKey = $request->input('gateway', 'stripe');

        // Dynamically resolve the selected gateway service
        $gateway = app($gatewayKey);

        $message = $gateway->pay($amount);

        return view('payment.result', compact('message'));
    }
}
