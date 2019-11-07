<?php

namespace Classes;

use Classes\PaymentMethods\NeedsCard;
use Classes\PaymentMethods\PaymentMethod;
use Exception;

class Pay
{
    private $item;
    private $method;

    public function pay()
    {
        if ($this->method instanceof NeedsCard) {
            return $this->method->validatePayment();
        }

        return true;
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

    public function getSummary(): string
    {
        return sprintf('%s is bought with %s with card %d paying %d', $this->item->getName(), $this->method->getName(), $this->method->getCardNumber(), $this->item->getCost());
    }
}
