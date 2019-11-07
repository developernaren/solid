<?php

namespace Classes;

use Classes\PaymentMethods\NeedsCard;
use Classes\PaymentMethods\PaymentMethod;
use Mockery\CountValidator\Exception;

class Pay
{
    private $item;
    private $method;

    public function pay()
    {
        return $this->method instanceof  NeedsCard ?
            $this->method->validatePayment():
            true;
    }

    public function setItem(Bakery $bakery)
    {
        $this->item = $bakery;
    }

    public function setPaymentMethod(PaymentMethod $paymentMethod)
    {
        $this->method = $paymentMethod;
    }

    public function getAmount()
    {
        if ($this->isSuccessful()) {
            return $this->item->getCost();
        }

        throw new Exception('Payment not done');
    }

    public function isSuccessful()
    {
        return $this->method->validatePayment();
    }

    public function getSummary()
    {
        return $this->item->getName()
            . ' is bought with ' .
            $this->method->getName() . ' with card ' .
            $this->method->getCardNumber() .
            ' paying ' . $this->item->getCost();
    }
}
