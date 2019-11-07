<?php

namespace Classes\PaymentMethods;

class Paypal implements PaymentMethod, NeedsCard
{
    private $cardNumber;

    public function getName()
    {
        return 'paypal';
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

    public function validatePayment()
    {
        return $this->cardNumber === '1234';
    }
}
