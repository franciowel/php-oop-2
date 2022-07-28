<?php
require_once __DIR__ . '/ArticoliAnimali.php';

class Cibi extends ArticoliAnimali {

    public $tipologia;
    public $anni;

    // override
    public function __construct($_nome, $_prezzo, $_marca, $_tipologia, $_anni) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->marca = $_marca;
        $this->tipologia = $_tipologia;
        $this->anni = $_anni;
    }
}
?>