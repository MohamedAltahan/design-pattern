<?php

namespace App\Services\Payment;

class VisaPaymentStrategy implements PaymentStrategyInterface
{
    public function processPayment(float $amount): void
    {
        // Logic for processing bank transfer payments
        echo "Processing payment via visa transfer for amount: $amount";
    }
}
