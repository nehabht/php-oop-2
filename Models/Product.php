<?php

class Product {
    
    public $title;
    public $price;
    public $codeNumber;
    public $quantity;


    public function __construct($title, $price, $codeNumber, $quantity){

        $this->title = $title;
        $this->price = $price;
        $this->codeNumber = $codeNumber;
        $this->quantity = $quantity;
    }



}




// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.
// BONUS: Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
//creare un trait e applicando un exception in qualche metodo che avete definito.