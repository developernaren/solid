<?php

namespace Classes\PaymentMethods;

class Cash implements PaymentMethod
{
    public function getName(): string
    {
        return 'cash';
    }
}
