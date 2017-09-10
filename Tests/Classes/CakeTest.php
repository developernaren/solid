<?php

namespace Tests\Classes;

use Classes\Cake;
use PHPUnit\Framework\TestCase;
use Mockery;

class CakeTest extends TestCase
{

    private $cake;

    public function setUp()
    {
        parent::setUp();

        $this->cake = Mockery::mock(Cake::class)->makePartial();
    }

    public function testGetName()
    {
        $this->assertSame($this->cake->getName(), 'cake');
    }
}
