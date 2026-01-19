<?php

class Alien {
    public $alienNaam;

    public function __construct($naam) {
        $this->alienNaam = $naam;
    }
}

$Alien1 = new Alien("zorglub");
echo "Naam alien: " . $Alien1->alienNaam . "<br>";
?>
