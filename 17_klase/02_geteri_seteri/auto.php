<?php
class Auto {
    // polja
    private $marka;
    private $boja;
    private $imaKrov;

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

$a1 = new Auto();

$a1->setMarka("Audi");
$a1->setImaKrov("Audi");

if($a1->getImaKrov() == true){
    echo "Automobil marke " . $a1->getMarka() . " ima krov<br>";
}
else {
    echo "Automobil marke " . $a1->getMarka() . " nema krov<br>";
}

// $a1->marka = 158;
echo $a1->getMarka();


?>