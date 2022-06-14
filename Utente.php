<?php


class Utente {

    public $name;
    public $mail;
    public $cart = [];
    
    function __construct($_name, $_mail) {
        $this->name = $_name;
        $this->mail = $_mail;
    }

    function addProductToCart($_product) {
        $this->cart[] = $_product;
    }
}
?>