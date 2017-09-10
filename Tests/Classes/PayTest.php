<?php

namespace Tests\Classes;

use Classes\Cake;
use Classes\Pay;
use Classes\PaymentMethods\Stripe;
use \Mockery;
use PHPUnit\Framework\TestCase;

class PayTest extends TestCase
{

    public function testGetAmountReturnsCorrectAmountWhenPaymentIsSuccessful()
    {
        $stripe = Mockery::mock(Stripe::class)->makePartial();
        $stripe->shouldReceive('validatePayment')->andReturn(true);


        $pay = new Pay();
        $pay->setItem(new Cake());
        $pay->setPaymentMethod($stripe);
        $this->assertSame($pay->getAmount(), 500);




    }
}
