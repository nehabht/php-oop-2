<?php


class User {
    
    public $userID;
    public $email;
    public $cardNumber;
    public $registred;


    public function __construct($userID, $email, $cardNumber, $registred){

        $this->userID = $userID;
        $this->email = $email;
        $this->cardNumber = $cardNumber;
        $this->registred = $registred;
    }


    public function discountOption($registred){
        if($registred == "yes"){
            return 'applica sconto del 20%';
        }
        
    }

    

}


