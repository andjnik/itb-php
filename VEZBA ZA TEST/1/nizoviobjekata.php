<?php

class Ispit {
    private $naziv;
    private $semestar;
    private $brojESPB;
    private $ocena;
    private $datum;

    // konstruktor
    function __construct($n, $s, $b, $o, $d) {
        $this->setNaziv($n);
        $this->setSemestar($s);
        $this->setBrojESPB($b);
        $this->setOcena($o);
        $this->setDatum($d);
    }


    // geteri i seteri
    function getNaziv() {
        return $this->naziv;
    }

    function setNaziv($n) {
        $this->naziv = $n;
    }

    function getSemestar() {
        return $this->semestar;
    }

    function setSemestar($s) {
        $this->semestar = $s;
    }

    function getBrojESPB() {
        return $this->brojESPB;
    }

    function setBrojESPB($b) {
        $this->brojESPB = $b;
    }

    function getOcena() {
        return $this->ocena;
    }

    function setOcena($o) {
        $this->ocena = $o;
    }

    function getDatum() {
        return $this->datum;
    }

    function setDatum($d) {
        $this->datum = $d;
    }
}




?>