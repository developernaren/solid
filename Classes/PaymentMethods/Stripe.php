<?php

namespace Classes\PaymentMethods;

use Classes\Bakery;

class Stripe implements PaymentMethod, NeedsCard
{
    private $cardNumber;

    public function getName(): string
    {
        return 'name';
    }

    public function validatePayment(): bool
    {
        return $this->cardNumber === '5678';
    }

    public function getAmount(): int
    {
    }

    public function getCardNumber(): int
    {
        return $this->cardNumber;
    }

    public function setCardNumber(int $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }
}
