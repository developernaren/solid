<?php

namespace Classes;


use Classes\PaymentMethods\NeedsCard;
use Classes\PaymentMethods\PaymentMethod;
use Mockery\CountValidator\Exception;

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
        if($this->isSuccessful()) {
            return $this->item->getCost();
        }

        throw new Exception('Payment not done');

    }

    function isSuccessful()
    {
        return $this->method->validatePayment();
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
