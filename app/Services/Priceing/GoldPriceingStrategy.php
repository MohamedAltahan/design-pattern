<?php

namespace App\Services\Priceing;

use App\Contracts\PricingStrategyInterface;

class GoldPriceingStrategy implements PricingStrategyInterface
{
    public function calculatePrice(float $price): float
    {
        return $price * 0.8; // discount 20%
    }
}
