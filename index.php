<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

$bakery = $_GET['bakery'];
$method = $_GET['method'];
$card = $_GET['card'];


//Lets assume that
//cake costs Rs 500
//biscuit costs 200
//donut costs 10
switch ($bakery) {

    case 'cake':
        $amount = 500;
        break;
    case 'biscuit':
        $amount = 200;
        break;
    case 'donut':
        $amount = 10;
        break;
    default:
        throw new Exception('You have to buy a dairy item');
}

//lets assume that
// if payment method is paypal, card should be 1234
// if payment method is stripe, card should be 5678
// if payment method is cash, card should be bank voucher

if($method === 'paypal' && $card !== '1234'){
    throw new Exception('Card number wrong for paypal');
}

if($method === 'stripe' && $card !== '5678'){
    throw new Exception('Card number wrong for stripe');
}

if($method === 'cash' && $card !== 'voucher'){
    throw new Exception('Voucher should be delivered if the payment method is cash');
}


echo $bakery . ' is bought with ' . $method . ' with card ' . $card;






