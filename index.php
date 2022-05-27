
<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Toys.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Accessories.php";
require_once __DIR__ . "/Models/User.php";



// $ball = new Toys('Ball', '10.00', '1X433', '100','Dog');
// var_dump($ball);

$neha = new User('neha', 'neha@gmail.com', '19202934440', "yes");
var_dump($neha);
var_dump($neha->discountOption(true));
