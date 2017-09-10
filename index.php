<?php
ini_set('display_errors',1);
error_reporting(E_ALL);


include 'vendor/autoload.php';

//Liskov's

//SOLID
//Single Responsbility Principle
//Open and Close Principle



$bakery = $_GET['bakery'];
$method = $_GET['method'];
$card = $_GET['card'];

$bakery = \Classes\Factory::create($bakery);
$paymentMethod = \Classes\PaymentMethods\Factory::create($method);

$pay = new \Classes\Pay();

$pay->setItem($bakery);
$pay->setPaymentMethod($paymentMethod);
$pay->pay();
echo $pay->getSummary();







