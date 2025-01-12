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
    public function index()
    {
        // Logic for priceing
        $wallet = new Product('wallet', 100.0, new RegularPriceingStrategy);
        $walletPrice = $wallet->calculatePrice();

        $jacket = new Product('jacket', 100.0, new GoldPriceingStrategy);
        $jackettPrice = $jacket->calculatePrice();

        // Logic for priceing
        $walletCheckout = new CheckoutService(new BankTransferPaymentStrategy);
        $walletCheckout->processPayment($walletPrice);

        echo "____________________________ \n";

        $jacketCheckout = new CheckoutService(new PaypalPaymentStrategy);
        $jacketCheckout->processPayment($jackettPrice);
    }
}
