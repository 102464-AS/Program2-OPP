<?php
require_once "class.php";

$rekening = new Rekening("Jan Jansen", "NL01BANK12345678", 500, 250, -100);

echo "<h1>Bankrekening Demo</h1>";


echo "<h3>Test: Geld opnemen (€200)</h3>";
echo $rekening->opnemen(200);
echo "<br>";
echo "<hr>";

echo "<h3>Test: Te veel opnemen </h3>";
echo $rekening->opnemen(300);
echo "<hr>";

echo "<h3>Test: Onder maxRood gaan</h3>";
echo $rekening->opnemen(1000);
echo "<hr>";

echo "<h3>Test: Negatief bedrag storten</h3>";
echo $rekening->storten(-50);
echo "<hr>";

echo "<h3>Test: Ongeldig bedrag </h3>";
echo $rekening->storten(10.999);
echo "<hr>";

echo "<h3>Test: Opnamelimiet wijzigen </h3>";
echo $rekening->pasOpnameLimietAan(300);
echo "<hr>";

echo "<h3>Test: Max rood wijzigen </h3>";
echo $rekening->pasMaxRoodAan(-500);
echo "<hr>"
?>