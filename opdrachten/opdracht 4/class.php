<?php
class Rekening {
    public $naamEigenaar;
    public $rekeningNummer;
    public $saldo;
    public $opnameLimiet;
    public $maxRood;

    public function __construct($naamEigenaar, $rekeningNummer, $saldo=0, $opnameLimiet=100, $maxRood=-500) {
        $this->naamEigenaar = $naamEigenaar;
        $this->rekeningNummer = $rekeningNummer;
        $this->saldo = $saldo;
        $this->opnameLimiet = $opnameLimiet;
        $this->maxRood = $maxRood;
    }

    public function getRekeningInfo() {

        return "Rekeninghouder: {$this->naamEigenaar} <br>Rekeningnummer: {$this->rekeningNummer}";
    }

    public function getSaldo() {

        return "Huidig saldo: €" . number_format($this->saldo, 2);
    }

    public function storten($bedrag) {

        if (!is_numeric($bedrag)) {
            return "Fout: bedrag moet een getal zijn.";
        }

        if ($bedrag < 0) {
            return "Fout: bedrag mag niet negatief zijn.";
        }

        return "Storten gelukt. Nieuw saldo: €" . $this->saldo;
    }

    public function opnemen($bedrag) {

        if (!is_numeric($bedrag)) {
            return "Fout: bedrag moet een getal zijn.";
        }

        if ($bedrag < 0) {
            return "Fout: bedrag mag niet negatief zijn.";
        }

        if ($bedrag > $this->opnameLimiet) {
            return "Fout: opname overschrijdt het opnamelimiet.";
        }

        if (($this->saldo - $bedrag) < $this->maxRood) {
            return "Fout: saldo mag niet onder maxRood komen.";
        }

        $this->saldo -= $bedrag;
        return "Opname gelukt. Nieuw saldo: €" . $this->saldo;
    }

    public function pasOpnameLimietAan($niewe_limiet){

        if (!is_numeric($niewe_limiet)){
            return "Fout: bedrag moet een getal zijn.";
        }

        if ($niewe_limiet <0){
            return "Fout: het bedrag mag niet negatief zijn";
        }

        $this->opnameLimiet = $niewe_limiet;

        return "Opnamelimiet succesvol bijgewerkt. Nieuwe limiet: " . $this->opnameLimiet;
    }

    public function pasMaxRoodAan($niewMaxRood){

        if (!is_numeric($niewMaxRood)){
            return "Fout: bedrag moet een getal zijn.";
        }

        if ($niewMaxRood >0){
            return "Fout: het bedrag moet negatief zijn";
        }

        $this->maxRood = $niewMaxRood;

        return "Max rood aangepast niew max rood:" . $niewMaxRood;
    }
}
