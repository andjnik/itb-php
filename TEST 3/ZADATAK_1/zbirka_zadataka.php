<?php 

require_once "knjiga.php";

class ZbirkaZadataka extends Knjiga {

    private $brojZadataka;

    public function __construct($naslov, $brStrana, $cena, $brZadataka) {
        parent::__construct($naslov, $brStrana, $cena);
        $this->setBrojZadataka($brZadataka);   
    }

    public function getBrojZadataka() {
        return $this->brojZadataka;
    }

    public function setBrojZadataka($brZadataka) {
        if($brZadataka > 0) {
            $this->brojZadataka = $brZadataka;
        }
        else {
            echo "<p>Broj zadataka u zbirci mora biti veci.</p>";
        }
    }

    public function stampa() {
        parent::stampa();
        echo "Broj zadataka u knjizi je: " . $this->brojZadataka . "<br>";

    }

    public function jedinicnaCena() {
        $prosecanBrojStrana = $this->getBrojZadataka() / $this->getBrojStrana();
        return $this->getCena() / $prosecanBrojStrana;
    }
}

?>