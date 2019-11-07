<?php

namespace Classes;

class Biscuit implements Bakery
{
    public function getName()
    {
        return 'biscuit';
    }

    public function getCost($price = 0)
    {
        return (empty($price)) ? 200 :$price;
    }
}
