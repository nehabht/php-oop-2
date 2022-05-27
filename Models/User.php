<?php


class User {
    
    public $userID;
    public $email;
    public $cardNumber;
    //public $registred;
    //public $notRegistred;
    //public $discount;


    public function __construct($userID, $email, $cardNumber ){

        $this->userID = $userID;
        $this->email = $email;
        $this->cardNumber = $cardNumber;

    }


    public function discountOption($registred){
        if($registred == true){
            $this->registred = true;
            $this->discount = 0.2;
            return 'possibile fare lo sconto del 20% ' . $this->discount;
        }else{
            $this->notRegistred = false;
            //$this->discount = 0;
            return "non è possibile uno sconto";
        }
    }


    

}


