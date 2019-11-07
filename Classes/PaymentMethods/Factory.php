<?php

namespace Classes\PaymentMethods;

use Exception;

class Factory
{
    /**
     * @param $name
     * @return PaymentMethod
     * @throws Exception
     */
    public static function create($name): PaymentMethod
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
