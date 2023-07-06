<?php 

require_once "kredit.php";

abstract class AutoKredit extends Kredit {

    private $autoKamata;

    public function __construct($naziv, $osnovica, $godisnjaKamata, $godinaOtplate, $autoKamata)
    {
        parent::__construct($naziv, $osnovica, $godisnjaKamata, $godinaOtplate);
        $this->autoKamata = $autoKamata;
    }

    public function racunanjeMesecnihRata()
    {
        $kamata = $this->osnovica * $this->godinaOtplate * ($this->godisnjaKamata + $this->autoKamata) / 100;
        $ukupanIznos = $this->osnovica + $kamata;
        $mesecnaRata = $ukupanIznos / ($this->godinaOtplate * 12);
        return $mesecnaRata;
    }
}

// kamata = osnovica * god_otplate * (god_kamata + auto_kamata) / 100;
// ukupan_iznos = osnovica + kamata;
// mesecna_rata = ukupan_iznos / (god_otplate * 12);



?>