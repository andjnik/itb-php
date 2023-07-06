<?php

abstract class Knjiga {

    private $naslov;
    private $brojStrana;
    private $cena;

    public function __construct($naslov, $brStrana, $cena) {
        $this->setNaslov($naslov);
        $this->setBrojStrana($brStrana);
        $this->setCena($cena); 
    }

    public function getNaslov() {
        return $this->naslov;
    }

    public function getBrojStrana() {
        return $this->brojStrana;
    }

    public function getCena() {
        return $this->cena;
    }

    public function setNaslov($naslov) {
        if (strlen($naslov >= 1)) {
            $this->naslov = $naslov;
        }
        else {
            echo "<p>Knjiga ne ispunjava zadate uslove.</p>";
        }
    }

    public function setBrojStrana($brStrana) {
        if($brStrana > 0) {
            $this->brojStrana = $brStrana;
        }
        else {
            echo "<p>Knjiga ne ispunjava zadate uslove.</p>";
        }
    }

    public function setCena($cena) {
        if($cena > 0) {
            $this->cena = $cena;
        }
        else {
            echo "<p>Knjiga ne ispunjava zadate uslove.</p>";
        }
    }

    public function stampa() {
        echo "Naslov knjige je: " . $this->getNaslov() . "<br>";
        echo "Broj strana knjige: " . $this->getBrojStrana() . "<br>";
        echo "Cena knjige je: " . $this->getCena() . "<br>";
    }

    abstract public function jedinicnaCena();
}

?>