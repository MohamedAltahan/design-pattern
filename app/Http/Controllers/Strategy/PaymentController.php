<?php

namespace App\Http\Controllers\Strategy;

use App\Http\Controllers\Controller;
use App\Services\CheckoutService;
use App\Services\Payment\BankTransferPaymentStrategy;
use App\Services\Payment\PaypalPaymentStrategy;
use App\Services\Payment\VisaPaymentStrategy;
use App\Services\Priceing\GoldPriceingStrategy;
use App\Services\Priceing\RegularPriceingStrategy;

class PaymentController extends Controller
{
    public function processPayment()
    {
        $wallet = new Product('wallet', 100.0, new RegularPriceingStrategy);
        $walletPrice = $wallet->calculatePrice();

        $jacket = new Product('jacket', 100.0, new GoldPriceingStrategy);
        $jackettPrice = $jacket->calculatePrice();

        $mobile = new Product('mobile', 100.0, new RegularPriceingStrategy);
        $mobilePrice = $mobile->calculatePrice();

        $walletCheckout = new CheckoutService(new BankTransferPaymentStrategy);
        $walletCheckout->processPayment($walletPrice);

        $jacketCheckout = new CheckoutService(new PaypalPaymentStrategy);
        $jacketCheckout->processPayment($jackettPrice);

        $mobileCheckout = new CheckoutService(new VisaPaymentStrategy);
        $mobileCheckout->processPayment($mobilePrice);
    }
}
