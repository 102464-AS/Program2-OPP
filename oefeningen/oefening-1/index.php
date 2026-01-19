<?php
function add($a, $b = 20){
    $antwoord = $a + $b;
    return $antwoord;
}


$berekening = add(10);
echo($berekening);
