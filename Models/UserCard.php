<?php

class UserCard {
    
    public $numebr;
    public $valid;


    public function __construct($number, $valid){

        $this->number = $number;
        $this->valid = $valid;

    }

}