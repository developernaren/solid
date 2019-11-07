<?php

namespace Classes\PaymentMethods;

interface NeedsCard
{
    public function validatePayment(): bool;

    public function getCardNumber(): int;

    public function setCardNumber(int $cardNumber): void;
}
