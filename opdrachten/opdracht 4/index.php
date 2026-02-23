<?php
require_once "class.php";

echo "<h1>Bankrekening Demo";

echo "<h2>Test 1: Alleen verplichte parameters</h2>";
$rekening1 = new Rekening("Lisa Bakker", "NL02BANK98765432"); 
echo $rekening1->getRekeningInfo() . "<br>";

echo "<h2>Test 2: Alle parameters meegegeven</h2>";
$rekening2 = new Rekening("Jan Jansen", "NL01BANK12345678", 500, 250, -100);
echo $rekening2->getRekeningInfo() . "<br>";
echo $rekening2->getSaldo() . "<hr>";