<?php

namespace Classes;

class Donut implements Bakery
{
    public function getName(): string
    {
        return 'donut';
    }

    public function getCost(): float
    {
        return 10;
    }
}
