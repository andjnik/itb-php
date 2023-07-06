<?php 

class Pacijent {
    private $ime;
    private $visina;
    private $tezina;

    // geteri

    public function getIme() {
        return $this->ime;
    }

    public function getVisina() {
        return $this->visina;
    }

    public function getTezina() {
        return $this->tezina;
    }

    // seteri

    public function setIme($ime) {
        $this->ime = $ime;
    }

    public function setVisina($visina) {
        if($visina >= 0 && $visina <= 250) {
            $this->visina = $visina;
        }
        else {
            echo "nema te visine";
        }
    }

    public function setTezina($tezina) {
        if($tezina >= 0 && $tezina <= 550) {
            $this->tezina = $tezina;
        }
        else {
            echo "nema ovakve tezine";
        }
        echo "<br>";
    }

    function stampaj() {
        echo "Ime pacijenta: " . $this->ime . "<br>";
        echo "Visina pacijenta je: " . $this->visina . "<br>";
        echo "Tezina pacijenta je: " . $this->tezina . "<br>";

    }

    function bmi() {
        $bmi = $this->tezina / ($this->visina / 100) ** 2;
        return $bmi;
    
    }


    function kritican() {
        if($this->bmi() < 15 || $this->bmi() > 40 ) {
            return true;
        }
        else {
            return false;
        }
    }
}

$p1 = new Pacijent();

$p1->setIme("Pacijent 1");
$p1->setVisina(190);
$p1->setTezina(70);
echo "Ime: " . $p1->getIme();
echo "Visina pacijenta: " . $p1->getVisina();


?>
