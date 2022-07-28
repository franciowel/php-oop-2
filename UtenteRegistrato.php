<?php
require_once __DIR__ . '/UtenteGenerale.php';

class UtenteRegistrato extends UtenteGenerale {
    
    public function __construct($_nome, $_mail) {
        $this->nome = $_nome;
        $this->email = $_mail;
    }

    // override
    public $sconto = 20;
}
?>