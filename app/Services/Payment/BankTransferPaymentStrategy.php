<?php

namespace App\Services\Payment;

class BankTransferPaymentStrategy implements PaymentStrategyInterface
{
    public function processPayment(float $amount): void
    {
        // Logic for processing bank transfer payments
        echo "Processing payment via bank transfer for amount: $amount";
    }
}
