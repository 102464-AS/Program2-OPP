<?php
// functies.php

function nlDatum($date, $shortYear = false) {
    list($year, $month, $day) = explode("-", $date);
    
    $maanden = [
        1 => "januari", 2 => "februari", 3 => "maart", 4 => "april",
        5 => "mei", 6 => "juni", 7 => "juli", 8 => "augustus",
        9 => "september", 10 => "oktober", 11 => "november", 12 => "december"
    ];

    $monthName = $maanden[(int)$month];

    if ($shortYear) {
        $year = substr($year, 2);
    }

    return $day . " " . $monthName . " " . $year;
}


$fullYear = nlDatum("1974-05-14");         
$shortYear = nlDatum("1974-05-14", true);  

echo("". $fullYear ."<br>". $shortYear ."");
?>
