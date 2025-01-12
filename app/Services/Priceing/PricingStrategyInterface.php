<?php

namespace App\Contracts;

interface PricingStrategyInterface
{
    public function calculatePrice(float $price);
}
