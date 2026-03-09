<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("class.php");

echo "TransactieKosten: " . SpaarRekening::TransactieKosten() . "<br>";

$spaar = new SpaarRekening("2026-03-09", 0.03, 5);
$kosten = 100;
echo "Bereken kosten: " . $spaar->berekenKosten($kosten) . "<br>";


$bedrag = 200;
$transactieKosten = $spaar->berekenKosten($bedrag);

echo "Transactiekosten voor €$bedrag: €$transactieKosten<br>";
?>