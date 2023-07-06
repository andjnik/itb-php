<?php 

abstract class Kredit {
    protected $naziv;
    protected $osnovica;
    protected $godisnjaKamata;
    protected $godinaOtplate;

    public function __construct($n, $o, $k, $g) {
        $this->setNaziv($n);
        $this->setOsnovica($o);
        $this->setGodisnjaKamata($k);
        $this->setGodinaOtplate($g);  
    }

    function getNaziv() {
        return $this->naziv;
    }

    function setNaziv($n) {
        $this->naziv = $n;
    }

    function getOsnovica() {
        return $this->osnovica;
    }

    function setOsnovica($o) {
        $this->osnovica = $o;
    }

    function getGodisnjaKamata() {
        return $this->godisnjaKamata;
    }

    function setGodisnjaKamata($k) {
        $this->godisnjaKamata = $k;
    }

    function getGodinaOtplate() {
        return $this->godinaOtplate;
    }

    function setGodinaOtplate($g) {
        $this->godinaOtplate = $g;
    }

    public function ispis() {
        echo "Naziv kredita: " . $this->naziv . "<br>";
        echo "Osnovica kredita je: " . $this->osnovica . "<br>";
        echo "Godisnja kamata je: " . $this->godisnjaKamata . "<br>";
        echo "Broj godina otplate kredita je: " . $this->godinaOtplate . "<br>";
    }

    abstract public function mesecnaRata();
}





?>