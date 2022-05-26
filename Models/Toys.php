<?php

class Toys extends Product{

    public $animalType;

    function __construct($title, $price, $codeNumber, $quantity, $animalType){

        parent::__construct($title, $price, $codeNumber, $quantity);
        $this->animalType = $animalType;
    }
}