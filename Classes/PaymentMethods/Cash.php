<?php

namespace Classes\PaymentMethods;

class Cash implements PaymentMethod
{
    public function getName()
    {
        return 'cash';
    }
}
