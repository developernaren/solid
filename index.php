<?php

use Classes\Factory as ProductsFactory;
use Classes\Pay;
use Classes\PaymentMethods\Factory as PaymentFactory;

ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'vendor/autoload.php';

$bakery = $_GET['bakery'];
$method = $_GET['method'];
$card = $_GET['card'];

$bakery = ProductsFactory::create($bakery);
$paymentMethod = PaymentFactory::create($method);

$paymentMethod->setCardNumber($card);

$pay = new Pay();

$pay->setItem($bakery);
$pay->setPaymentMethod($paymentMethod);
$pay->pay();

echo $pay->getSummary();
