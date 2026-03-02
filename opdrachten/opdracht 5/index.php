<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "class.php";

$rekening = new Rekening("Jan Jansen", "NL01BANK12345678", 500, 250, -100);

echo "Rekeningnummer: " . $rekening->rekeningNummer . "<br>";

echo("probeer de private porperties te echoen<br>");

echo "Naam eigenaar: " . $rekening->naamEigenaar . "<br>";
echo "Saldo : " . $rekening->saldo . "<br>";
?>