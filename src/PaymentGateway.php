<?php

namespace Osama\PaymentGateway;

class PaymentGateway
{
    public function processPayment($amount, $currency)
    {
        return "Processing payment of {$amount} {$currency}.";
    }
}