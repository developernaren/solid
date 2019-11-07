<?php

namespace Classes;

class Biscuit implements Bakery
{
    public function getName(): string
    {
        return 'biscuit';
    }

    public function getCost(): float
    {
        return  200;
    }
}
