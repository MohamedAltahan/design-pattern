<?php

namespace App\Services\Priceing;

interface PricingStrategyInterface
{
    public function calculatePrice(float $price);
}
