<?php

namespace Classes\PaymentMethods;

use Mockery\CountValidator\Exception;

class Factory
{
    public static function create($name)
    {
        switch ($name) {

            case 'paypal':
                return new Paypal();
            case 'stripe':
                return new Stripe();
            case 'cash':
                return new Cash();

        }

        throw new Exception('Invalid Payment Method');
    }
}
