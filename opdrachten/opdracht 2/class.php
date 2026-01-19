<?php

class Rekeningen {
    public $naamEigenaar;
    public $rekeningNummer;
    public $saldo;
    public $opnameLimiet;
    public $maxRood;

    public function __construct($naamEigenaar, $rekeningNummer, $saldo, $opnameLimiet, $maxRood) {
        $this->naamEigenaar = $naamEigenaar;
        $this->rekeningNummer = $rekeningNummer;
        $this->saldo = $saldo;
        $this->opnameLimiet = $opnameLimiet;
        $this->maxRood = $maxRood;
    }
}

?>
