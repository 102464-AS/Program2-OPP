<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("class.php");

$spaar = new SpaarRekening("2026-03-09", 0.03, 5);
$saldo = 1000;
$saldo = $spaar->berekenMaandbedrag($saldo);
echo "Nieuw saldo SpaarRekening: " . $saldo . "<br>";

$belegging = new BeleggingsRekening("2026-03-09", 1000, 0.05);
$nieuwSaldo = $belegging->berekenNieuweSaldo();
echo "Nieuw saldo BeleggingsRekening: " . $nieuwSaldo . "\n";
?>