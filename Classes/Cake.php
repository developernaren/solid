<?php

namespace Classes;

class Cake implements Bakery
{
    public function getName(): string
    {
        return 'cake';
    }

    public function getCost(): float
    {
        return 500;
    }
}
