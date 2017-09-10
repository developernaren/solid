<?php

namespace Classes\PaymentMethods;

interface NeedsCard
{
    function validatePayment();
}
