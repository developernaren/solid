<?php

namespace Classes\PaymentMethods;

use Classes\Bakery;

class Stripe implements PaymentMethod, NeedsCard
{
    public $cardNumber;
    public $item;

    public function setItem(Bakery $bakery)
    {
        $this->item = $bakery;
    }

    public function getItemName()
    {
        return $this->item->getName();
    }

    public function getName()
    {
        return 'name';
    }

    public function validatePayment()
    {
        return $this->cardNumber === '5678';
    }

    public function getAmount()
    {
    }

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param mixed $cardNumber
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }
}
