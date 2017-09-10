<?php

namespace Classes;


use Classes\PaymentMethods\NeedsCard;
use Classes\PaymentMethods\PaymentMethod;

class Pay
{
    private $item;
    private $method;

    function pay()
    {
        return $this->method instanceof  NeedsCard ?
            $this->method->validatePayment():
            true;
    }

    function setItem(Bakery $bakery)
    {
        $this->item = $bakery;
    }

    function setPaymentMethod( PaymentMethod $paymentMethod)
    {
        $this->method = $paymentMethod;
    }

    function getAmount()
    {

        return $this->item->getCost();
    }

    function getSummary()
    {
        return $this->item->getName()
            . ' is bought with ' .
            $this->method->getName() . ' with card ' .
            $this->method->getCardNumber() .
            ' paying ' . $this->item->getCost();
    }

}
