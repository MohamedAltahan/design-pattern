<?php

namespace App\Services\Priceing;



class GoldPriceingStrategy implements PricingStrategyInterface
{
    public function calculatePrice(float $price): float
    {
        return $price * 0.8; // discount 20%
    }
}
