<?php

require_once __DIR__ . '/Trait.php';

class ArticoliAnimali {
    
    use NewTrait;

    public $nome;

    public $prezzo;

    public $marca;


    public function __construct($_nome, $_prezzo, $_marca) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->marca = $_marca;
    }
}
?>