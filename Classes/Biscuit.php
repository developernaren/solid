<?php

namespace Classes;

class Biscuit implements Bakery
{

    function getName()
    {
        return 'biscuit';
    }

    function getCost()
    {
        return 200;
    }
}
