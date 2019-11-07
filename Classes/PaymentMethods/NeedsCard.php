<?php

namespace Classes\PaymentMethods;

interface NeedsCard
{
    public function validatePayment();
}
