<?php

class Food extends Product{

    public $wetFood;

    function __construct($title, $price, $codeNumber, $quantity){

        parent::__construct($title, $price, $codeNumber, $quantity);
        $this->wetFood = $wetFood;
    }
}