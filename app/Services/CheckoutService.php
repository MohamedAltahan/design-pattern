<?php

namespace App\Services;

use App\Services\Payment\PaymentStrategyInterface;

class CheckoutService
{
    private PaymentStrategyInterface $paymentStrategy;

    public function __construct(PaymentStrategyInterface $paymentStrategy)
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function processPayment(float $amount): void
    {
        $this->paymentStrategy->processPayment($amount);
    }
}
