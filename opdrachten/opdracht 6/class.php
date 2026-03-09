<?php
class SpaarRekening {
    public $startdatum;
    public $renten;
    public $kosten;

    public function __construct($startdatum, $renten, $kosten,) {
        $this->startdatum = $startdatum;
        $this->renten = $renten;
        $this->kosten = $kosten;
    }

    public function berekenMaandbedrag($maandSaldo){
        $nieuwSaldo = $maandSaldo + ($maandSaldo * $this->renten) - $this->kosten;
        return $nieuwSaldo;
    }

    public function PasRenteAan($nieuweRente){
        $this->renten = $nieuweRente;  
    }
}

class BeleggingsRekening extends SpaarRekening {
        public $startdatum;
        public $inleg;
        public $rendement;
    
    public function __construct($startdatum, $inleg, $rendement,) {
        parent::__construct($startdatum, 0, 0);
        $this->inleg = $inleg;
        $this->rendement = $rendement;
        $this->saldo = $inleg;
    }

    public function berekenNieuweSaldo(){   
        $this->saldo = $this->saldo + ($this->saldo * $this->rendement);
        return $this->saldo;
    }
}
?>