<?php

namespace App\Services\Payment;

class PaypalPaymentStrategy implements PaymentStrategyInterface
{
    public function processPayment(float $amount): void
    {
        // Logic for processing bank transfer payments
        echo "Processing payment via paypal transfer for amount: $amount";
    }
}
