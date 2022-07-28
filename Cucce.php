<?php
require_once __DIR__ . '/ArticoliAnimali.php';

class Cucce extends ArticoliAnimali {

    public $grandezza;

    // override
    public function __construct($_nome, $_prezzo, $_marca, $_grandezza) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->marca = $_marca;
        $this->grandezza = $_grandezza;
    }
}
?>