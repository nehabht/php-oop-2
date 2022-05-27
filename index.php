<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Toys.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Accessories.php";
require_once __DIR__ . "/Models/User.php";



// $ball = new Toys('Ball', '10.00', '1X433', '100','Dog');
// var_dump($ball);

$neha = new User('neha', 'neha@gmail.com', '19202934440');
var_dump($neha);
var_dump($neha->discountOption(true));
var_dump($neha); //riporta se è registrato o meno e i lo sconto

$robi = new User('robi', 'robi@gmail.com', '19202934440');
var_dump($robi);
var_dump($robi->discountOption(false));
var_dump($robi); //riporta se è registrato o meno e i lo sconto



