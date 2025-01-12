<?php

namespace App\Services\Priceing;

use App\Contracts\PricingStrategyInterface;

class RegularPriceingStrategy implements PricingStrategyInterface
{
    public function calculatePrice(float $price): float
    {
        return $price;
    }
}
