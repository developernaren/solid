<?php

namespace Classes;


use Mockery\CountValidator\Exception;

class Factory
{

    public static function create($name)
    {
        switch ($name) {

            case 'cake':
                return new Cake();
            case 'biscuit':
                return new Biscuit();
            case 'donut':
                return new Donut();
        }

        throw new Exception('We do not sell ' . $name);
    }

}
