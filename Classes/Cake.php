<?php

namespace Classes;

class Cake implements Bakery
{
    public function getName()
    {
        return 'cake';
    }

    public function getCost()
    {
        return 500;
    }
}
