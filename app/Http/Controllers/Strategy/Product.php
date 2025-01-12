<?php

namespace App\Http\Controllers\Strategy;

use App\Contracts\PricingStrategyInterface;
use App\Http\Controllers\Controller;

class Product extends Controller
{
    private string $name;

    private float $price;

    private PricingStrategyInterface $pricingStrategy;

    public function __construct(string $name, float $price, PricingStrategyInterface $pricingStrategy)
    {
        $this->name = $name;
        $this->price = $price;
        $this->pricingStrategy = $pricingStrategy;
    }

    public function calculatePrice(): float
    {
        return $this->pricingStrategy->calculatePrice($this->price);
    }
}
