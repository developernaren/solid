<?php

namespace Classes\PaymentMethods;


class Paypal implements PaymentMethod, NeedsCard
{
    private $cardNumber;

    function getName()
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

    function validatePayment()
    {
        return $this->cardNumber === '1234';
    }

}
