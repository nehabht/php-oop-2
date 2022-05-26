
<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Toys.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Accessories.php";



$ball = new Toys('Ball', '10.00', '1X433', '100','Dog');
var_dump($ball);
