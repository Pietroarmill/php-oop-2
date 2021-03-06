<?php


class Utente {

    public $name;
    public $mail;
    public $carello = [];
    public $metodoPagamento;

    public function addProductToCart($_product) {
        if ($_product->prezzo) {
            $this->carello[] = $_product;
        }
    }

    public function getTot() {
        $total_sum = 0;
        foreach ($this->carello as $prodotto) {
            $total_sum = $total_sum + $prodotto->prezzo;
        }
        if ($this->isRegister()) {
            $total_sum = $total_sum - ($total_sum / 100) * 20;
        }
        return $total_sum;
    }

    public function register($_name, $_mail) {
        $this->name = $_name;
        $this->mail = $_mail;
    }

    public function isRegister() {
        if ($this->name && $this->mail) {
            return true;
        }
    }
    
    public function setMetodoPagamento($_metodoPagamento) {
        $this->metodoPagamento = $_metodoPagamento;
    }

    public function pay() {
        if ($this->metodoPagamento->isValid()) {
            return "Hai pagato";
        } else {
            return "Errore di pagamento";
        }
    }
}

?>