<?php

namespace Classes\PaymentMethods;

class Paypal implements PaymentMethod, NeedsCard
{
    private $cardNumber;

    public function getName(): string
    {
        return 'paypal';
    }

    public function getCardNumber(): int
    {
        return $this->cardNumber;
    }

    public function setCardNumber(int $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    public function validatePayment(): bool
    {
        return $this->cardNumber === '1234';
    }
}
