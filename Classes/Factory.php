<?php

namespace Classes;

use Exception;

class Factory
{
    /**
     * @param $name
     * @return Bakery
     * @throws Exception
     */
    public static function create($name): Bakery
    {
        switch ($name) {

            case 'cake':
                return new Cake();
            case 'biscuit':
                return new Biscuit();
            case 'donut':
                return new Donut();
        }

        throw new Exception(sprintf('We do not sell %s', $name));
    }
}
