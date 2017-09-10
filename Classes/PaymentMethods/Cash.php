<?php

namespace Classes\PaymentMethods;


class Cash implements PaymentMethod
{
    function getName()
    {
        return 'cash';
    }
}
