<?php

class Toys extends Product{

    public $animalType;

    function __construct($title, $price, $codeNumber, $quantity){

        parent::__construct($title, $price, $codeNumber, $quantity);
        $this->animalType = $animalType;
    }
}