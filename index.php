
<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Toys.php";
require_once __DIR__ . "/Models/Food.php";



$ball = new Product('Ball', '10.00', '1X433', '100');
var_dump($ball);
