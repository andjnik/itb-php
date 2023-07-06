<?php

class Auto {
    // polja
    private $marka;
    private $boja;
    private $imaKrov;

    // KONSTRUKTOR

    public function __construct($m, $b, $ik)
    {
        $this->setMarka($m);
        $this->setBoja($b);
        $this->setImaKrov($ik);
    }

    // GETERI

    public function getMarka() {
        return $this->marka;
    }

    public function getBoja() {
        return $this->boja;
    }

    public function getImaKrov() {
        return $this->imaKrov;
    }

    // SETERI: postavljaju vrednosti polja
    public function setMarka($m) {
        $this->marka = $m;
    }

    public function setBoja($b) {
        $this->boja = $b;
    }

    public function setImaKrov($ik) {
        if($ik === true || $ik === false) {
        $this->imaKrov = $ik;
        }
        else {
            $this->imaKrov = false;
        }
    }

    // metode
    function sviraj() {
        echo "<p>Beep! Beep!</p>";
    }

    function ispis() {
        echo "<p>Automobil marke " . $this->marka . " boje " . $this->boja;
        if ($this->imaKrov) {
            echo " ima krov";
        }
        else {
            echo " nema krov";
        }
        echo "</p>";
    }

}

if ("da li je poslata forma") {
    $marka = "sakupi polje marka sa forme";
    $boja = "sakupi polje boja sa forme";
    $imaKrov = "sakupi polje boja sa forme";

    $a = new Auto($marka, $boja, $imaKrov);

    $a->ispis();
}

$a1 = new Auto("BMW", "plava", false);
$a1 = new Auto("Citroen", "crna", true);

$a1->ispis();


?>