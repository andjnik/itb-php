<?php

require_once "kredit.php";

class AutoKredit extends Kredit {

    private $autoKamata;

    public function __construct($n, $o, $k, $g, $a) {
        parent::__construct($n, $o, $k, $g);
        $this->setAutoKamata($a);
    }

    public function getAutoKamata() {
        return $this->autoKamata;
    }

    public function setAutoKamata($a) {
        $this->autoKamata = $a;
    }

    public function ispis() {

    }

    public function mesecnaRata() {
        $kamata = $this->osnovica * $this->godinaOtplate * ($this->godisnjaKamata + $this->autoKamata) / 100;
        $ukupanIznos = $this->osnovica + $kamata;
        $mesecnaRata = $ukupanIznos / ($this->godinaOtplate * 12);
        return $mesecnaRata;
    }
}




?>