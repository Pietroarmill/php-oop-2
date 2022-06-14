<?php
class Cibo {
    public $marca;
    public $peso;
    public $prezzo;
    public $tipo;

    function __construct($_marca, $_peso, $_prezzo, $_tipo) {
        $this->marca = $_marca;
        $this->peso = $_peso;
        $this->prezzo = $_prezzo;
        $this->tipo = $_tipo;
    }

    public function printInfo() {
        return "$this->marca $this->peso"
    }

}