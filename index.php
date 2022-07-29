<?php
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.

// BONUS:
// Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto.
require_once __DIR__ . '/Cibi.php';
require_once __DIR__ . '/Cucce.php';
require_once __DIR__ . '/UtenteAnonimo.php';
require_once __DIR__ . '/UtenteRegistrato.php';

$croccantini = new Cibi('Crocchette Grandi', 25, 'Ciuffi', 'Canini', 'Cuccioli');
$scatoletta1 = new Cibi('Pollo e salsa proteica', 15, 'MigliorGatto', 'Felini', 'Adulti');
$scatoletta2 = new Cibi('Salmone e Gamberi', 15, 'Radames', 'Felini', 'Adulti');

$cuccia1 = new Cucce('Cuccia ripieno piume', 25, 'Kasanova', 'Taglie Grandi');
$cuccia2 = new Cucce('Cuccia Latex', 20, 'HappyCasa', 'Taglie Medie');


$francesco = new UtenteRegistrato('Francesco Spina', 'francio@mail.it');
$francesco->addProd($croccantini);
$francesco->addProd($scatoletta1);
$francesco->addProd($cuccia2);

$francesco->saldo = 70;
var_dump($francesco);
try {
    if($francesco->pay()) {
        echo "<h3>Operazione effettuata con successo!</h3>";
    }
} catch(Exception $e) {
    error_log($e->getMessage());
    echo "<h3>Operazione non disponibile. Verificare il saldo e riprovare.</h3>";
}

$anonimo = new UtenteAnonimo();
$anonimo->addProd($cuccia1);
$anonimo->addProd($croccantini);
var_dump($anonimo);
try {
    if($anonimo->pay()) {
        echo "<h3>Operazione effettuata con successo!</h3>";
    }
} catch(Exception $e) {
    error_log($e->getMessage());
    echo "<h3>Operazione non disponibile. Verificare il saldo e riprovare.</h3>";
}

?>