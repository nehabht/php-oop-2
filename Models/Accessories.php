<?php

class Accessories extends Product{

    public $accessory;

    function __construct($title, $price, $codeNumber, $quantity, $accessory){

        parent::__construct($title, $price, $codeNumber, $quantity);
        $this->accessory = $accessory;
    }
}