<?php

namespace App\Enums;

enum PaymentMethodEnum: string
{
    case VisaCard = 'visa_card';
    case Paypal = 'paypal';
    case BankTransfer = 'bank_transfer';
    case Cash = 'cash';
}
