<?php

namespace Tests\Classes;


use Classes\Biscuit;
use Mockery;
use PHPUnit\Framework\TestCase;

class BiscuitTest extends TestCase
{

    private $biscuit;

    public function setUp()
    {
        parent::setUp();
        $this->biscuit = new Biscuit();
    }

    public function testGetName()
    {
        $this->assertSame($this->biscuit->getName(), 'biscuit');
    }

    public function testWhenCostIsNotProvidedItIs200()
    {

        $this->assertSame($this->biscuit->getCost(), 200);
    }

    public function testWhenCostIsProvidedItIsProvidedCost()
    {

        $this->assertSame($this->biscuit->getCost(10), 10);
        $this->assertNotSame($this->biscuit->getCost(10), 100);
    }


}
