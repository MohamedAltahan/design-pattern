<?php

namespace App\Services\Payment;

interface PaymentStrategyInterface
{
    public function processPayment(float $amount): void;
}
