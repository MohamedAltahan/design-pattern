<?php

namespace App\Services\Priceing;



class RegularPriceingStrategy implements PricingStrategyInterface
{
    public function calculatePrice(float $price): float
    {
        return $price;
    }
}
