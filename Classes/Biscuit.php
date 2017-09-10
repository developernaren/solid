<?php

namespace Classes;

class Biscuit implements Bakery
{

    function getName()
    {
        return 'biscuit';
    }

    function getCost($price = 0)
    {
        return (empty($price)) ? 200 :$price;
    }
}
